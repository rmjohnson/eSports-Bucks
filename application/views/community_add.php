<table>
<form action="" method="POST">
	<tr>
		<td>Admin ID:</td>
		<td><input type="text" name="admin" value="<?= $admin; ?>"></td>
	</tr>
	<tr>
		<td>Mod IDs:</td>
		<td><input type="text" name="mods" value="<?= $mods; ?>"></td>
	</tr>
	<tr>
		<td>Name of the community:</td>
		<td><input type="text" name="name" value="<?= $name; ?>"></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td><textarea name="description"><?= $description ?></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="Add Community"></td>
	</tr>
</table>
