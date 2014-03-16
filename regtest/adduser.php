<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Registration</title>
</head>

<body>
<h2>Add user</h2>
<form action="adduser_submit.php" method="post">
		<table>
			<tr>
				<td><label for="username">Username</label></td>
				<td><input type="text" id="username" name="username" value="" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td><input type="text" id="password" name="password" value="" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="email">Email</label></td>
				<td><input type="text" id="email" name="email" value="" maxlength="100" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
					<input type="submit" value="→ Login" /></td>
			</tr>
		</table>
</form>
</body>
</html>