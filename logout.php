<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login | 207 Enterprises</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h1>207 Enterprises</h1>
	<h2>Successfully Logged Out</h2>
	<form action="users.php" method="post">
		<p>
			Email
			<input name="email" type="text" />
		</p>
		<p>
			Password
			<input name="password" type="password" />
		</p>
		<p>
			<input name="login" type="submit" value="Login" />
			<span> or </span>
			<a href="register.htm">Register new account</a>
		</p>
	</form>
</body>
</html>