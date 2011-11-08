<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ESB extends Controller_Template {

	public function before()
	{
		parent::before();
		$this->template->title = "eSports Bucks - Tournament Organization Tool";
		$this->template->media_base = URL::Base().'media/';
	}
} // End Welcome
