<?php namespace Wegnermedia\Informer;

use Session;

/**
* Messager
*/
class Informer
{
	private $storage_key = 'informer.message';

	protected $message;

	function __construct()
	{
		// Get the Current Message
		$this->message = Session::get($this->storage_key, null);

		// Delete the Message Stack
		Session::forget($this->storage_key);
	}

	/**
	 * Set a success Message
	 *
	 * @return void
	 **/
	public function success($title, $body, $modal = false)
	{
		$this->make('success', $title, $body, $modal);
	}

	/**
	 * Make the Message
	 *
	 * @return void
	 **/
	protected function make($type, $title, $body, $modal = false)
	{
		// Set the Message to the Session
		$message = new Message($type, $title, $body, $modal);

		Session::put($this->storage_key, $message);
	}

	/**
	 * Get the Current Message
	 *
	 * @return mixed
	 **/
	public function get()
	{
		return $this->message;
	}
}
