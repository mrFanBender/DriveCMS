<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template 
{
	public $template = 'main';
	
	public function before(){
		parent::before();
		View::set_global('title', 'Drive');
		View::set_global('description', 'Система управления сайтом Drive');
		$this->template->content = '';
		$this->template->styles = array('main');
		$this->template->scripts = '';
	}

} // End Page
