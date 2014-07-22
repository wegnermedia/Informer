<?php namespace Wegnermedia\Informer;

use Illuminate\Support\Facades\Facade;

class Informer extends Facade {

	protected static function getFacadeAccessor() {
		// Return Name of Binding in IoC Container
		return "Wegnermedia\Informer\Informer";
	}

}
