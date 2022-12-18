<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwilioSMSController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Redirects the home page to the chosen locale.
Route::get('/', function () {
    return redirect(app()->getlocale());
});

Route::get('/', 'GeoLocationController@getClientIps');

// Route for setting locale, max 2 letters, using locale middleware.
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}_[A-Z]{2}|[a-z]{2}'],
    'middleware' => 'setlocale'], function () {

    // Route for showing welcome page.
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/404', function () {
        return view('error404');
    });

    // Generates user authentiction routes.
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/teams', 'TeamsController@index')->name('teams');
    Route::get('/team/{teamid}', 'TeamsController@teamprofile')->name('teamprofile');
    Route::get('/teamprofile', function () {
        return redirect(app()->getlocale());
    });

    Route::get('/players', 'PlayersController@index')->name('players');
    Route::get('/player/{playerid}', 'PlayersController@playerprofile')->name('playerprofile');
    Route::get('/playerprofile', function () {
        return redirect(app()->getlocale());
    });

    Route::get('/schedule', 'ScheduleController@index')->name('schedule');
    Route::get('/fixture/{fixtureid}', 'ScheduleController@fixturedetails')->name('fixture');
    Route::get('/fixture', function () {
        return redirect(app()->getlocale());
    });

    Route::get('/standings', 'StandingsController@index')->name('standings');
    Route::get('/statistics', 'StatisticsController@index')->name('statistics');
    Route::get('/transfers', 'TransfersController@index')->name('transfers');

    // Route for showing welcome page.
    Route::get('/server', function () {
        return view('server');
    });

});

// Redirect for 404 Error to localised version
Route::get('/404', function () {
    return redirect(app()->getlocale()."/404");
});

// Redirect for 403 Error to localised version
Route::get('/403', function () {
    return redirect(app()->getlocale()."/403");
});

Route::get('/discord-notification', 'DiscordNotificationDemo@index')->name('discord');
