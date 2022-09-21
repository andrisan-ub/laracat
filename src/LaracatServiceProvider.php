<?php

namespace Andrisan\Laracat;

use Illuminate\Support\ServiceProvider;

class LaracatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Laracat::class, function(){
            return new Laracat;
        });
    }
}
