<table>
	<tr>
		<td>Admin:</td>
		<td><?= $admin ?></td>
	</tr>
	<tr>
		<td>Mods:</td>
		<td><?= $mods ?></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><?= $name ?></td>
	</tr>
	<tr>
		<td>Description: </td>
		<td><?= $description ?></td>
	</tr>
</table>
<table>
	<tr>
		<th>Members</th>
	</tr>
	<?
		foreach($members as $member)
		{
			echo "<tr>\n";
			echo "\t" . '<td><a href="' . URL::base() . 'player/view/' . $member . '">' . name_from_id($member) . "</a></td>\n";
			echo "</tr>\n";
		}
	?>
</table>
<br />
<?= $join ?>