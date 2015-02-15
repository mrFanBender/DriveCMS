<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Admin_Common
{
	public function action_index()
	{
		$user = Auth::instance();
		if(!$user->logged_in())
		{
			$this->redirect('admin/user/login');
		}

		/*$page = Arr::get($_POST, 'page', false);
		if($page=='modulemanager')
		{
			$content = View::factory('admin/modulemanager');
		}
		elseif($page=='generalmodules')
		{
			$content = View::factory('admin/generalmodules');
		}
		elseif($page=='pagemanager')
		{
			$content = View::factory('admin/pagemanager')
						->set('msg', 'hello');
		}
		else
		{
			$content = View::factory('admin/admin');
		}*/
		$content = View::factory('admin/admin');
		$this->template->content = $content;

	}
} // End Page

