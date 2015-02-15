<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Jumbotron{

	public static function factory(array $config = array())
	{
		return new Jumbotron($config);
	}

	public function __construct(array $config = array())
	{
		$this->config = Kohana::$config->load('Jumbotron')->as_array();
	}

	public function render()
	{
		$view = View::factory('Jumbotron/client')->set('cfg', $this->config);
		return $view->render();
	}
}
?>