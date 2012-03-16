<? if($accessdenied): ?>
<p>
	Access denied!
</p>
<? endif; ?>

<? if(!$logged_in): ?>
<h4>Log In</h4>
<table>
	<form name="login" action="/" method="post">
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="login" value="Log In">
		</td>
	</tr>
	</form>
</table>
<h4>Register</h4>
<table>
	<form name="register" action="/" method="post">
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>Confirm Password:</td>
		<td><input type="password" name="confirm"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="register" value="Register">
		</td>
	</tr>
	</form>
</table>
<? else: ?>
<?
	foreach($links as $url => $label) {
		echo '<a href="' . URL::base() .  $url . '">' . $label . '</a><br />';
	}
?>
<a href="?logout">Log out?</a>
<? endif; ?>