<?php namespace Juokelis\MovieDB;

use Illuminate\Support\ServiceProvider;

class MovieDBServiceProvider extends ServiceProvider {


	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->publishes([
            __DIR__.'/../config/moviedb.php' => config_path('moviedb.php'),
        ]);
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
