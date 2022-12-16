<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//ServiceProvider for Turn.io
class TurnIOServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //binding the interface and the class
        $this->app->bind("App\Services\TurnIOServiceInterface", "App\Services\TurnIOService");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
