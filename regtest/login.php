<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Login</title>
</head>

<body>
<h2>Login Here</h2>
<form action="login_submit.php" method="post">
	<fieldset>
		<p>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" value="" maxlength="20" />
		</p>
		<p>
			<label for="password">Password</label>
			<input type="text" id="password" name="password" value="" maxlength="20" />
		</p>
		<p>
			<input type="submit" value="→ Login" />
		</p>
	</fieldset>
</form>
</body>
</html>