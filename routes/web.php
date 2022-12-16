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

    // Generates user authentiction routes.
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

});

// Redirect for 404 Error to localised version
Route::get('/404', function () {
    return redirect(app()->getlocale()."/404");
});

// Redirect for 403 Error to localised version
Route::get('/403', function () {
    return redirect(app()->getlocale()."/403");
});
