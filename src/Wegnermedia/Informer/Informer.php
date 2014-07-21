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
	 * Set a info Message
	 *
	 * @return void
	 **/
	public function info($title, $body, $modal = false)
	{
		$this->make('info', $title, $body, $modal);
	}

	/**
	 * Set a hint Message
	 *
	 * @return void
	 **/
	public function hint($title, $body, $modal = false)
	{
		$this->make('hint', $title, $body, $modal);
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
	 * Set a warning Message
	 *
	 * @return void
	 **/
	public function warning($title, $body, $modal = false)
	{
		$this->make('warning', $title, $body, $modal);
	}

	/**
	 * Set a danger Message
	 *
	 * @return void
	 **/
	public function danger($title, $body, $modal = false)
	{
		$this->make('danger', $title, $body, $modal);
	}

	/**
	 * Set a error Message
	 *
	 * @return void
	 **/
	public function error($title, $body, $modal = false)
	{
		$this->make('error', $title, $body, $modal);
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
