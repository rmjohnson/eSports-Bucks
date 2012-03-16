<h2><?= name_from_id($id) ?> - <?= race_from_id($id) ?></h2>
<?
if(!empty($communities)) 
{
	foreach($communities as $community)
	{
		echo "<h4>" . $community['name'] . "</h4>";
		echo "<p>" . $community['description'] . "</p>";
	}
} else {
	echo "<p>No commmunities!</p>";
}
?>