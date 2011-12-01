<? if($id): ?>
<h1><?= $username; ?></h1>
<?
foreach($communities as $community)
{
	echo "<h4>" . $community['name'] . "</h4>";
	echo "<p>" . $community['description'] . "</p>";
}
?>
<? else: ?>
Search for players and stuff.
<? endif; ?>