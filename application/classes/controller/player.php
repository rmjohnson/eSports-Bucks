<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Player extends Controller_ESB {
	
	//Listing / searching for players
	//If a param is included then view a player
	public function action_index()
	{
		$view = View::factory('player');
		$id = @($this->request->param());
		$view->id = $id;
		if($id)
		{
			$view->username = DB::select('username')->from('users')->where('id','=',$id)->execute()->get('username');
			$communities_id = DB::select()->from('membership')->where('user','=',$id)->execute()->as_array('community','community');
			$view->communities = DB::select()->from('communities')->where('communities_id','IN',$communities_id)->execute()->as_array();
		}
		$this->template->content = $view;
	}
	
	//Edit password/email for a user/player
	public function action_edit()
	{
		
	}
}