<?php 

include_once('includes/DB_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (!empty($_POST['name']) && !empty($_POST['password'])) {
		
		$username = $_POST['name'];
		$password = $_POST['password'];
		$password_hash = md5($password);

		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password_hash'";
		$result = mysqli_query($connection, $query);
		if ($result) {
			if ($result->num_rows > 0) {

				setcookie("is_login", true, time() + 20000);

				header("Location: http://localhost:84/authentication/Cookie/content_1.php");

			} else {
				echo "Failed";
			}
		}
	}
} 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<form action="" method="POST">
		Username: <input type="text" name="name"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>