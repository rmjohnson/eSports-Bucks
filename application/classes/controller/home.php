<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_ESB {

	public function action_index()
	{
		$view = View::factory('home');
		
		$this->template->content = $view;
	}
}
