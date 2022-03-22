<!DOCTYPE html>
<html>
<head>
	<title>Forms - 1</title>
</head>
<body>
	<!-- Submit a form using the "get" method: -->
	<p>Submit a form using the "get" method</p>
	<form action="actions/action.php" method="GET">
		Name: <input type="text" name="name"><br>
		Email: <input type="text" name="email"><br>
		<input type="submit" value="Send">
	</form>

	<br>

	<!-- Submit a form using the "post" method: -->
	<p>Submit a form using the "post" method</p>
	<form action="actions/action.php" method="POST">
		Name: <input type="text" name="name"><br>
		Email: <input type="text" name="email"><br>
		<input type="submit" value="Send">
	</form>
</body>
</html>