<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Community extends Controller_ESB {

	//Listing / searching for communities
	//If a param is included then view a community
	public function action_index()
	{
		$view = View::factory('community');
		$view->editwin = isset($_GET['editwin']);
		$view->editfail = isset($_GET['editfail']);
		$view->communities = DB::select()->from('communities')->execute()->as_array('communities_id');
		$this->template->content = $view;
	}
	
	//Create a community
	public function action_add()
	{
			$view = View::factory('community_add');
			$view->admin ='';
			$view->mods = '';
			$view->name = '';
			$view->description = '';
			if($_POST)
			{
				//A function to retrieve ID using name or email should be made
				$admin = @(htmlspecialchars($_POST['admin']));
				$mods = @(htmlspecialchars($_POST['mods']));
				$name = @(htmlspecialchars($_POST['name']));
				$description = @(htmlspecialchars($_POST['description']));
				if($admin && $mods && $name && $description)
				{
					DB::insert('communities', array('admin','mods','name','description'))->values(array($admin,$mods,$name,$description))->execute();
					$this->request->redirect("/community?success");
				} else {
					$view->admin = $admin;
					$view->mods = $mods;
					$view->name = $name;
					$view->description = $description;
				}
			}
			$this->template->content = $view;
	}
	
	//View community information
	public function action_view()
	{
		$id = $this->request->param();
		$view = View::factory('community_view');
		$community = DB::select()->from('communities')->where('communities_id','=',$id)->execute()->current();
		$view->admin = name_from_id($community['admin']);
		$view->mods = $community['mods'];
		$view->name = $community['name'];
		$view->description = $community['description'];
		$this->template->content = $view;
	}
	
	//Edit information about a community
	public function action_edit()
	{
		$id = $this->request->param();
		$view = View::factory('community_edit');
		$community = DB::select()->from('communities')->where('communities_id','=',$id)->execute()->current();
		if($this->user == $community['admin'])
		{
			$view->mods = $community['mods'];
			$view->name = $community['name'];
			$view->description = $community['description'];
			if($_POST)
			{
				$mods = $_POST['mods'];
				$name = $_POST['name'];
				$description = $_POST['description'];
				if(DB::update('communities')->set(array('mods' => $mods,'name' => $name, 'description' => $description))->where('communities_id','=',$community['communities_id'])->execute())
				{
					$this->request->redirect("/community?editwin");
				} else {
					$this->request->redirect("/community?editfail");
				}
			}
			$this->template->content = $view;
		} else {
			$this->request->redirect("/?accessdenied");
		}
	}
	
	//Permalink to join a community
	public function action_join()
	{
		$community = $this->request->param();
		$view = View::factory('community_join');
		if(DB::insert('membership',array('user','community'))->values(array($this->user,$community))->execute())
		{
			$view->message = "Successfully joined.";
		} else {
			$view->message = "Joining failed.";
		}
		$this->template->content = $view;
	}
}