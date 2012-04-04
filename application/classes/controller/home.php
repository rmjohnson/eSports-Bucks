<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_ESB {
	
	public function action_index()
	{
		$view = View::factory('home');
		$view->accessdenied = isset($_GET['accessdenied']);
		if(isset($_GET['logout']))
		{
			Auth::instance()->logout();
		}
		$this->template->errors = array();
		$view->links = array();
		$view->links += array('community' => 'Communities');
		$view->links += array('tournament' => 'Tournaments');
		$view->links += array('player/view/' . $this->user => 'Your Profile');
		
		if($_POST)
		{
			if(@($_POST['register']))
			{
				$username = @(htmlspecialchars($_POST['username']));
				$password = @(htmlspecialchars($_POST['password']));
				$confirm = @(htmlspecialchars($_POST['confirm']));
				$email = @(htmlspecialchars($_POST['email']));
				
				if($password != $confirm)
				{
					array_push($this->template->errors,"Passwords did not match.");
				}
				
				if(empty($this->template->errors))
				{
					$new_user = ORM::factory('user');
					$new_user->email=$email;
					$new_user->username=$username;
					$new_user->password=$password;
					$new_user->save();
					$role = ORM::factory('role','1');
					$new_user->add('roles',$role);
					$new_user->save();
				}
			} 
			elseif(@($_POST['login'])) 
			{
				$username = @(htmlspecialchars($_POST['username']));
				$password = @(htmlspecialchars($_POST['password']));
				if(Auth::instance()->login($username,$password) != 1)
				{
					array_push($this->template->errors,"Log in failed.");
				}
			}
		
		}
		$view->logged_in = Auth::instance()->logged_in();
		$this->template->content = $view;
	}
}
