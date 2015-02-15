<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Articles{

	public static function factory(array $config = array())
	{
		return new Articles($config);
	}

	public function __construct(array $config = array())
	{
		$this->config = Kohana::$config->load('articles')->as_array();
	}

	public function render()
	{
		$view = View::factory('articles/client')->set('cfg', $this->config);
		return $view->render();
	}
}
?>