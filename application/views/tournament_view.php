 <h2><?= $name ?> - <?= com_from_id($community) ?></h2>
<h4>Admin: <?= $admin ?></h4>
<h4>Refs: 
<?
	$i = 0;
	foreach($refs as $ref)
	{
		echo name_from_id($ref);
		if($i+1 != count($refs)) {
			echo ", ";
		}
		$i++;
	}
?>
</h4>
<h4>Players</h4>
<ul>
	<? foreach($players as $player) {
		echo "<li>" . name_from_id($player) . "</li>";
	}
	?>
</ul>
<h4>Maps</h4>
<ul>
<? 
foreach($maps as $map) 
{
	echo "<li>" . map_name($map) . "</li>";
}
?>
</ul>
<h4>Description</h4>
<p><?= $description ?></p>
<h4>Exclusive: <?= $exclusive ? "Yes" : "No" ?></h4>