<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        \Blade::if('roles', function (array $roles) { 
            return \Auth::check() 
                && in_array(\Auth::user()->role, $roles, true); 
        });

        view()->composer('layouts.app', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });

        view()->composer('layouts.app', function ($view) {
            $routeName = \Route::currentRouteName();
            $view->with('routename', $routeName);
        });
    }
}
