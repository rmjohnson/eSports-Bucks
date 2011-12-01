<? if($editwin): ?><p>Community successfully updated!</p><? endif; ?>
<? if($editfail): ?><p>Community failed to update. =(</p><? endif; ?>
<table>
	<tr>
		<th>Name</th>
		<th>Admin</th>
		<th>Member Count</th>
	</tr>
<? 
foreach($communities as $community)
{
	echo "<tr>";
	echo "\t<td><a href=\"community/view/" . $community['communities_id'] . "\">" . $community['name'] . "</a></td>";
	echo "\t<td>" . name_from_id($community['admin']) . "</td>";
	echo "\t<td>" . count_from_id($community['communities_id']) . "</td>";
	echo "</tr>";
}
?>
</table>