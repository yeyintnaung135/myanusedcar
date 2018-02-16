<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * appserviceprovider cannot share auth thus i use this service provider to share auth id to masterads.blade.php
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //function compose of viewcomposer class will generate return for masterads.blade.php
        view()->composer('masterads', 'App\Http\viewcomposer\viewcomposer@compose');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
