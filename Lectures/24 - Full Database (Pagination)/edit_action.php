<?php 

include_once('includes/DB_connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Student</title>
</head>
<body>
	
	<?PHP

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$id = $_GET['id'];

			$name = $_POST['name'];
			$email = $_POST['email'];
			$birth_date = $_POST['birth_date'];
			$nationality = $_POST['nationality'];

			if (!empty($id) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['birth_date']) 
				&& !empty($_POST['nationality'])) {
				$query = "UPDATE student SET name = '$name', email = '$email', birth_date = '$birth_date', nationality = '$nationality' WHERE id = $id";

				$result = mysqli_query($connection, $query);

				if ($result) {
					echo "<p><strong>Student record updated successfully</strong></p>";
				} else {
					echo "<p><strong>Failed to update this student</strong></p>";
				}
			} else {
				echo "<p><strong>Some fields are missing</strong></p>";
			}
	}	

	?>

	<a href="students.php">View Students</a>

</body>
</html>

