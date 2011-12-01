<table>
<form action ="" method="POST">
	<tr>
		<td>Mods:</td>
		<td><input type="text" name="mods" value="<?= $mods; ?>"></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name" value="<?= $name; ?>"></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td><textarea name="description"><?= $description ?></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Update"></td>
	</tr>
</form>
</table>