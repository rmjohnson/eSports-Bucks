<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Leaderboard extends Controller_ESB {
	
	//Listing / searching for leaderboards
	//If a param is included then view a leaderboard
	public function action_index()
	{
		$view = View::factory('leaderboard');
		$view->boards = DB::select('community')->from('leaderboards')->group_by('community')->execute()->as_array();
		$this->template->content = $view;
	}
	
	//View a leaderboard
	public function action_view()
	{
		$view = View::factory('leaderboard_view');
		$community_id = $this->request->param('id');
		$view->community = com_from_id($community_id);
		$view->scores = DB::select()->from('leaderboards')->where('community','=',$community_id)->order_by('score','DESC')->execute()->as_array();
		$this->template->content = $view;
	}
	
	//Moderate a leaderboard
	public function action_edit()
	{
		$view = View::factory('leaderboard_edit');
		
		$this->template->content = $view;
	}
}