<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
     * 
     */
    public function boot()
    {

        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
	    //Nous allons forcer le system a utiliser du https quand on est en production.
	    if(config('app.env') === 'production'){
	    	\URL::forceScheme('https');
	    }

    }
}
