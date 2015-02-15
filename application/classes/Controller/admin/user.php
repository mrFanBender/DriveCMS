<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Common
{
	protected $login_view = 'admin/login';
	protected $result = array(	'0'	=>	'no_log_user',
								'1'	=>	'bad_pair',
								'2'	=>	'success');

	public function action_login()
	{
		$user = Auth::instance();
		if($user->logged_in())
		{
			$this->redirect('admin/main/index');
		}
		$post = $this->request->post();
		if(isset($post['login']) && isset($post['pass']))
		{
			$success = $user->login($post['login'], $post['pass']);
			if($success)
			{
				$this->redirect('admin/main/index');
			}
			else
			{
				$error = true;
			}
		}
		$content = View::factory('admin/login')
						->bind('error', $error);
		$this->template->content = $content;	
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		$this->redirect(URL::base().'admin/user/login');
	}
} // End Page

