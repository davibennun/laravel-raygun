<?php namespace Davibennun\LaravelRaygun;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

use Raygun4php\RaygunClient;

class LaravelRaygunServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('davibennun/laravel-raygun');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['raygun'] = $this->app->share(function($app)
		{
			return new RaygunClient(Config::get('laravel-raygun::apiKey'),Config::get('laravel-raygun::async'),Config::get('laravel-raygun::debugMode'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}