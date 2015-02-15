<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_HorizontalMenu{

	public static function factory(array $config = array())
	{
		return new HorizontalMenu($config);
	}

	public function __construct(array $config = array())
	{
		$this->config = Kohana::$config->load('horizontalMenu')->as_array();
	}

	public function render()
	{
		$view = View::factory('horizontalMenu/client')->set('cfg', $this->config);
		return $view->render();
	}
}
?>