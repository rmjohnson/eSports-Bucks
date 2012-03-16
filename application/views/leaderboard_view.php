<h2><?= $community ?> Leaderboard</h2>
<table>
	<tr>
		<th>Rank</th>
		<th>Player</th>
		<th>Score</th>
	</tr>
	<?
		$i = 1;
		foreach($scores as $score) {
			echo "<tr>\n";
			echo "\t<td>" . $i . ". </td>";
			echo "\t" . '<td><a href="' . URL::base() . 'player/view/' . $score['user'] . '">' . name_from_id($score['user']) . "</a></td>\n";
			echo "\t<td>" . $score['score'] . "</td>\n";
			echo "</tr>\n";
			$i++;
		}
	?>
</table>