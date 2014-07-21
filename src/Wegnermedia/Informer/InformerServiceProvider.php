<?php namespace Wegnermedia\Informer;

use Illuminate\Support\ServiceProvider;

use View, Informer;

class InformerServiceProvider extends ServiceProvider {

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
		$this->package('wegnermedia/informer');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		View::addNamespace('Informer', __DIR__. '/../../views/informer');

		View::composer('Informer::message', function($view){
			$view->with('message', Informer::get());
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
