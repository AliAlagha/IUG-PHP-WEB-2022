<?php 

if (isset($_COOKIE['is_login']) && $_COOKIE['is_login'] == true) {
	
}else {
	header("Location: http://localhost:84/authentication/Cookie/login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Content 1</title>
</head>
<body>
	<h1>Content 1</h1>
	<a href="logout.php">Logout</a>
</body>
</html>