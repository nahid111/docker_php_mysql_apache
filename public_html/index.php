<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Docker PHP Apache MySQL</title>
</head>
<body>
	

	<h1>Hello World..!</h1>

	<h4>Attempting MySQL connection from php...</h4>

<?php
	$host = 'mysql';
	$user = 'root';
	$pass = 'rootpassword';
	$conn = new mysqli($host, $user, $pass);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "<h1>Connected to MySQL successfully!</h1>";
?>


</body>
</html>