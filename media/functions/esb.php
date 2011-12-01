<?
function name_from_id($id)
{
	return DB::select('username')->from('users')->where('id','=',$id)->execute()->get('username');
}
function count_from_id($id)
{
	return DB::select(array('COUNT("username")', 'membercount'))->from('users')->execute()->get('membercount');
}
?>