<?
function name_from_id($id)
{
	return DB::select('username')->from('users')->where('id','=',$id)->execute()->get('username');
}
function name_link_from_id($id)
{
	return '<a href="' . URL::base() . 'player/view/' . $id . '">' . DB::select('username')->from('users')->where('id','=',$id)->execute()->get('username') . '</a>';
}
function com_from_id($id)
{
	return DB::select('name')->from('communities')->where('communities_id','=',$id)->execute()->get('name');
}
function com_link_from_id($id)
{
	return '<a href="' . URL::base() . 'community/view/' . $id . '">' . DB::select('name')->from('communities')->where('communities_id','=',$id)->execute()->get('name') . '</a>';
}
function tourny_from_id($id)
{
	return DB::select('name')->from('tournies')->where('tournies_id','=',$id)->execute()->get('name');
}
function tourny_link_from_id($id)
{
	return '<a href="' . URL::base() . 'tournament/view/' . $id . '">' . DB::select('name')->from('tournies')->where('tournies_id','=',$id)->execute()->get('name') . '</a>';
}
function count_from_id($id)
{
	return DB::select(array('COUNT("user")', 'membercount'))->from('membership')->where('community','=',$id)->execute()->get('membercount');
}
function check_membership($player_id,$community_id)
{
	return DB::select()->from('membership')->where('user','=',$player_id)->where('community','=',$community_id)->execute();
}
function race_from_id($id)
{
	switch(DB::select('race')->from('users')->where('id','=',$id)->execute()->get('race')) {
		case 1:
			return "Zerg";
			break;
		case 2:
			return "Protoss";
			break;
		case 3:
			return "Terran";
			break;
	}
}	
?>