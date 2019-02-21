<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class JobOffertsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\JobOffertsServiceInterface','App\Services\JobOffertsService');
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
