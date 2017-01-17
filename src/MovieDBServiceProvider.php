<?php namespace Mikemike\MovieDB;

use Illuminate\Support\ServiceProvider;

class MovieDBServiceProvider extends ServiceProvider {


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
	 * @return MovieDB
	 */
	public function register()
	{ 
		$this->app->bind('moviedb', function($app){
            return new MovieDB;
        });
	}

}
