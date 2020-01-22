<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
	<style>
		body, input{
			text-align: center;
			margin-bottom: 1%;
		}
	</style>
<body>
	<h1>LOGIN</h1>
	<form action="php-login.php" method="post">
		Email : <input type="email" name="user"> <br>
		Password : <input type="password" name="pass"> <br>
		<input type="submit" value="Login">
	</form>
	<form action="form-register.php">
		<input type="submit" value="Register">
	</form>
</body>
</html>