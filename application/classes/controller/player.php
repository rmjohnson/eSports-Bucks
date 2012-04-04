<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Player extends Controller_ESB {
	
	//Listing / searching for players
	//If a param is included then view a player
	public function action_index()
	{
		$view = View::factory('player');
		$this->template->errors = array();
		if($_POST) {
			$username = @($_POST['username']);
			$id = DB::select('id')->from('users')->where('username','=',$username)->execute()->get('id');
			if($id) {
				$this->request->redirect(URL::base() . 'player/view/' . $id);
			} else {
				array_push($this->template->errors,"Player not found.");
			}
		}
		$this->template->content = $view;
	}
	
	//View a player's profile
	public function action_view()
	{
		$view = View::factory('player_view');
		$view->id = $this->request->param('id');
		$communities_id = DB::select()->from('membership')->where('user','=',$view->id)->execute()->as_array('community','community');
		if(!empty($communities_id)) {
			$view->communities = DB::select()->from('communities')->where('communities_id','IN',$communities_id)->execute()->as_array();
		} else {
			$view->communities = array();
		}
		if($view->id == $this->user)
		{
			$view->edit = "<a href=\"" . URL::base() . "player/edit/" . $this->user .  "\">Edit your profile</a>";
		} else {
			$view->edit = "";
		}
		$this->template->content = $view;
	}
	
	//Edit password/email for a user/player
	public function action_edit()
	{
		$id = $this->request->param('id');
		if($id != $this->user) {
			$this->request->redirect(URL::base());
		}
		$view = View::factory('player_edit');
		
		$this->template->content = $view;
	}
}