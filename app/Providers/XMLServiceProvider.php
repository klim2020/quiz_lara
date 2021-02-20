<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Xmlparser;

class XMLServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(XMLparser::class,function ($app){
            return new XMLparser();
        });
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
