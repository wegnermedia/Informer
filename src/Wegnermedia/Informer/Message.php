<?php namespace Wegnermedia\Informer;

/**
* Message Object
*/
class Message
{
	public 	$type;

	public 	$title;

	public 	$body;

	public 	$modal;

	function __construct($type, $title, $body, $modal)
	{
		$this->type  = $type;
		$this->title = $title;
		$this->body  = $body;
		$this->modal = $modal;
	}

	/**
	 * Classname Generator for this Message
	 *
	 * @return string
	 **/
	public function classname()
	{
		$name = array();

		$name[] = $this->type;

		$name[] = ( $this->modal ) ? 'modal' : null;

		return implode(' ', $name);
	}
}