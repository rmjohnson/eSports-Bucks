<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tournament extends Controller_ESB {

	//Listing / searching for tournies
	//If a param is included then view a tourny
	public function action_index()
	{
		$view = View::factory('tournament');
		$view->editwin = isset($_GET['editwin']);
		$view->editfail = isset($_GET['editfail']);
		$view->tournies = DB::select()->from('tournies')->where('exclusive','=',0)->execute()->as_array('tournies_id');
		$this->template->content = $view;
	}

	//Add a tournament to a community
	public function action_add()
	{
		$community = $this->request->param('id');
		if(!$community)
		{
			$this->request->redirect(URL::base() . 'tournament');
		}
		
		$view = View::factory('tournament_add');
		
		$view->community = com_from_id($community);
		$view->available_maps = get_maps();
		/*
		$view->refs = '';
		$view->maps = '';
		*/
		$view->description = '';
		$view->exclusive = '';
		if($_POST)
		{
			$refs = array();
			$refCount = $_POST['refCount'];
			for($i=1;$i<=$refCount;$i++)
			{
				array_push($refs,$_POST['ref'.$i]);
			}
			
			$ref_ids = array();
			foreach($refs as $ref)
			{
				if(!id_from_name($ref))
				{
					array_push($this->template->errors,"Could not find user: " . $ref);
				} else {
					array_push($ref_ids,id_from_name($ref));
				}
			}
			//die(Debug::vars($ref_ids));
			$maps = array();
			$mapCount = $_POST['mapCount'];
			for($i=1;$i<=$mapCount;$i++) {
				array_push($maps,$_POST['map'.$i]);
			}
			
			$description = @(htmlspecialchars($_POST['description']));
			$exclusive = @(htmlspecialchars($_POST['exclusive']));
			
			if(!check_admin($this->user,$community)) 
			{
				array_push($this->template->errors,"You are not the admin of this community.");
			}
			
			if(empty($this->template->errors))
			{
				//DB::insert('tournies', array('community','admin','description','exclusive'))->values(array($community,$this->user,$description,$exclusive))->execute();
				$this->request->redirect("/tournament?success");
			} else {
				$view->description = $description;
				$view->exclusive = $exclusive;
			}
		}
		$this->template->content = $view;
	}
	
	//View the bracket and other information of a tournament
	public function action_view()
	{
		$id = $this->request->param('id');
		if(!$id) {
			$this->request->redirect(URL::base() . 'tournament');
		}
		
		$view = View::factory('tournament_view');
		$tournament = DB::select()->from('tournies')->where('tournies_id','=',$id)->execute()->current();
		$view->name = $tournament['name'];
		$view->community = $tournament['community'];
		$view->admin = name_from_id($tournament['admin']);
		$view->refs = explode(",",$tournament['refs']);
		$view->players = DB::select('player')->from('tournies_players')->where('tournies_id','=',$id)->execute()->as_array('player','player');
		$view->maps = DB::select('map')->from('tournies_maps')->where('tournies_id','=',$id)->execute()->as_array('map');
		$view->description = $tournament['description'];
		$view->exclusive = $tournament['exclusive'];
		$this->template->content = $view;
	}
	
	//Edit information about a tournament
	public function action_edit()
	{
		$id = $this->request->param();
		$view = View::factory('tournament_edit');
		$tournament = DB::select()->from('tournies')->where('tournies_id','=',$id)->execute()->current();
		if($this->user == $tournament['admin'])
		{
			$view->refs = $tournament['mods'];
			$view->players = $tournament['players'];
			$view->maps = $tournament['maps'];
			$view->description = $tournament['description'];
			$view->exclusive = $tournament['exclusive'];
			if($_POST)
			{
				$refs = $_POST['refs'];
				$players = $_POST['players'];
				$maps = $_POST['maps'];
				if(DB::update('tournies')->set(array('refs' => $refs,'players' => $players, 'maps' => $mapss))->where('tournies_id','=',$tournament['tournies_id'])->execute())
				{
					$this->request->redirect("/tournament?editwin");
				} else {
					$this->request->redirect("/tournament?editfail");
				}
			}
			$this->template->content = $view;
		} else {
			$this->request->redirect("/?accessdenied");
		}
	}
	
	//Sharable permalink to join a tournament
	public function action_join()
	{
		$tournies_id = $this->request->param();
		$view = View::factory('tournament_join');
		$exclusive = DB::select('exclusive')->from('tournies')->where('tournies_id','=',$tournies_id)->execute()->get('exclusive');
		$community = DB::select('community')->from('tournies')->where('tournies_id','=',$tournies_id)->execute()->get('community');
		if(($exclusive && check_membership($this->user,$community)) || !$exclusive)
		{
			if(DB::insert('tournies')->set(array('players' => $players))->where('tournies_id','=',$tournies_id)->execute())
			{
				$view->message = "Successfully joined.";
			} else {
				$view->message = "Joining failed.";
			}
			$this->template->content = $view;
		} else {
			$this->request->redirect('/tournament?exclusive');
		}	
	}
	
	//Link to check into a tourny on gameday
	public function action_checkin()
	{
		
	}
}