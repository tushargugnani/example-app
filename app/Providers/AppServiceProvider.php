<?php

namespace App\Providers;

use App\Example;
use App\Collaborator;
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
        app()->bind('App\Example', function(){
            $c = new Collaborator();
            $foo = '123';
            return new Example($c, $foo);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
