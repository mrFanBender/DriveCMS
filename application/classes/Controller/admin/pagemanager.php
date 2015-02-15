<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pagemanager extends Controller
{
	public function action_index()
	{
		$user = Auth::instance();
		if(!$user->logged_in())
		{
			$this->redirect('admin/user/login');
		}
		$content = View::factory('admin/pagemanager');
		$this->response->body($content);

	}
} // End Page

