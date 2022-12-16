<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//ServiceProvider for Twilio
class TwilioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //binding the interface and the class
        $this->app->bind("App\Services\TwilioServiceInterface", "App\Services\TwilioService");
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
