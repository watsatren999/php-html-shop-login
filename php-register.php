<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
</head>
	<style>
		body, input{
			text-align: center;
			margin-bottom: 1%;
		}
	</style>
<body>
	<form action="form-login.php">
		<input type="submit" value="back to login">
	</form>
</body>
</html>
<?php
include("connect.php");
$user = $_POST["user"];
$pass = $_POST["pass"];

$sql = "INSERT INTO login (email, password)
VALUES ('".$user."', '".$pass."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>