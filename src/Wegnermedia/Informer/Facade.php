<?php namespace Wegnermedia\Informer\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Facade extends LaravelFacade {

	protected static function getFacadeAccessor() {
		// Return Name of Binding in IoC Container
		return "Wegnermedia\Informer\Informer";
	}

}
