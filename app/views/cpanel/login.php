<form autocomplete="off" action="<?php echo BASE_URL ?>login/authentication_login" method="POST">
	<?php
	if (isset($msg)) {
		echo '<span style="color:blue;" font-weigth:bold>' . $msg . '</span>';
	}

	?>
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text"  name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="login" value="Login"></td>
		</tr>
	</table>
</form>