<h2>Tournaments</h2>
<table>
	<tr>
		<th>Tournament</th>
		<th>Community</th>
	</tr>
	<?
		foreach($tournies as $tourny)
		{
			echo "<tr>\n";
			echo "\t<td>" . tourny_link_from_id($tourny['tournies_id']) . "</td>\n";
			echo "\t<td>" . com_link_from_id($tourny['community']) . "</td>\n";
		}
	?>
</table>