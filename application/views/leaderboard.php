<h2>Leaderboards</h2>
<table>
<tr>
	<th>Community</th>
	<th>Total Users</th>
</tr>
<?
	foreach($boards as $board) {
		echo "<tr>\n";
		echo "\t" . '<td><a href="' . URL::base() . 'leaderboard/view/' . $board['community'] . '">' . com_from_id($board['community']) . "</a></td>\n";
		echo "\t<td>" . count_from_id($board['community']) . "</td>\n";
		echo "</tr>\n";
	}
?>
</table>