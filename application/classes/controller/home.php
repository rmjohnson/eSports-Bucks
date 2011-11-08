<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_ESB {

	public function action_index()
	{
		$view = View::factory('home');
		$view->errors = array();
		if(isset($_GET['logout']))
		{
			Auth::instance()->logout();
		}		
		$view->logged_in = Auth::instance()->logged_in();
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
					array_push($view->errors,"Passwords did not match.");
				}
				
				if(empty($view->errors))
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
				Auth::instance()->login($username,$password);
			}
		
		}
		$this->template->content = $view;
	}
}
