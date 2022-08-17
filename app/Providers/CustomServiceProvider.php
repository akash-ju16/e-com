<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyFirstInterface;
use App\Services\MyFirstService;
use App\Services\MySecondService;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(MyFirstInterface::class, MyFirstService::class);

        /** 
         * note: no need to bind classes into the container if they do not depend on any interfaces
        */
        $this->app->bind(MySecondService::class, function ($app) {
            return new MySecondService();
          });

        // $this->app->bind(MyFirstInterface::class, function($app){
        //     return $app->make(MyFirstService::class);
        // });
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
