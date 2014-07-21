# Laravel Flash Message Informer

This Package gives you an easy way to flash messages.

## Installation

Per usual, install Commander through Composer.

```js
"require": {
    "wegnermedia/informer": "dev-master"
}
```

Next, update `app/config/app.php` to include a reference to this package's service provider in the providers array.

```php
'providers' => [
    'Wegnermedia\Informer\InformerServiceProvider'
]
```

Next, add the facade `app/config/app.php`.

```php
'aliases' => [
    'Informer' => 'Wegnermedia\Informer\Facade'
]
```

Last, but not least, include the nessesary view partial in your master template

```blade
@include('Informer::message')
```

And now build something awesome.

## Usage

```php
<?php

class CartController extends ShopController {

	/**
	 * Add Item to Cart.
	 *
	 * @return Response
	 */
	public function addItem()
	{
		// ... adding logic

		// Set the Success Message
		Informer::success('Nice', "You've added {$item->name} successfully to your cart." );

		// ... create the Response
		return Redirect::back();

	}

	/**
	 * Reset Cart.
	 *
	 * @return Response
	 */
	public function reset()
	{
		// Set a danger Message and make it modal as well ...
		Informer::danger('Attention', "You're about to delete your cart, you wish to proceed?", true);
	}

}
```

Done!