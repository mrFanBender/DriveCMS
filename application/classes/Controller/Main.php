<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Common
{
	protected $controller = '';
	protected $action = '';
	protected $page_name = '';

	public function action_index(){
		$this->page_name = trim($this->request->param('page'));
		//$this->controller = trim($this->request->param('controller'));
		//$this->action = trim($this->request->param('action'));

		if($this->page_name == '')
		{
			$this->page_name = 'contacts';
		}
		$page = Model::factory('Page')->getPage($this->page_name);
		$moduleManager = new Controller_Modulemanager();
		if($page)
		{
			$content 	= View::factory('client')
								->set('page', $page)
								->bind('modules', $pagemodules);
			$pagemodules = $moduleManager->loadPageModules($page['id']);

		}
		else
		{
			$content = View::factory('404');
		}

		if($this->controller != '')
		{
			$content=$this->controller;	
		}
		else
		{

		}
		$this->template->content 		= $content;
		$this->template->generalmodules = $moduleManager->loadGeneralModules();
	}
} // End Page
