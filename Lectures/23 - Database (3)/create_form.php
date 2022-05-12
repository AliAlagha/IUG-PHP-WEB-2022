<?php

include_once('includes/DB_connection.php');

			// student: id, name, email, birth_date, nationality, image

			/*
				create table student (
				id int primary key auto_increment,
				name text,
				email text,
				birth_date text,
				nationality text,
				image text
			);
			*/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Student</title>
</head>
<body>

	<?PHP

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Validation
		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['birth_date']) && 
			!empty($_POST['nationality']) && !empty($_FILES['image'])) {
			
			$file_name = $_FILES['image']['name'];
			$file_tmp = $_FILES['image']['tmp_name'];
			$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

			$file_new_name = strval(time() + rand(1, 1000000000)) . '.' . $file_ext;
			$upload_path = 'uploads/' . $file_new_name;
			move_uploaded_file($file_tmp, $upload_path);

			#####################################################################

			$name = $_POST['name'];
			$email = $_POST['email'];
			$birth_date = $_POST['birth_date'];
			$nationality = $_POST['nationality'];

			$query = "INSERT INTO student (name, email, birth_date, nationality, image) VALUES ('$name', '$email', '$birth_date', '$nationality', '$upload_path')";

			$result = mysqli_query($connection, $query);

			if ($result) {
				echo "<p><strong>New record created</strong></p><br>";
			} else {
				echo "<p><strong>Failed to create a new record</strong></p><br>";
			}

		}

	}

	?>

	<form action="" method="POST" enctype="multipart/form-data"> 
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
		<br>

		<label for="email">Email</label>
		<input type="text" name="email" id="email">
		<br>

		<label for="birth_date">Date of Birth</label>
		<input type="text" name="birth_date" id="birth_date">
		<br>

		<label for="nationality">Nationality</label>
		<select name="nationality" id="nationality">
			<!-- If the user does not choose the nationality, the value will be sent -1 -->
			<option value="-1"></option>
			<option value="PAL">Palestinian</option>
			<option value="SYR">Syrian</option>
		</select>
		<br>

		<input type="file" name="image">
		<br>

		<input type="submit" value="Save">
	</form>
</body>
</html>