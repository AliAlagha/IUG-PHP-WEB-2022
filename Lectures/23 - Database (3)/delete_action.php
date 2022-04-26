<?php

include_once 'includes/DB_connection.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Student</title>
</head>
<body>
	<?php 

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$id = $_POST['id'];

		if (!empty($id)) {
			
			$query = "DELETE FROM student WHERE id = $id";
			$result = mysqli_query($connection, $query);
			if ($result) {
				echo '<p><strong>Deleted Successfully</strong></p>';
			} else {
				echo '<p><strong>Failed to Delete</strong></p>';
			}

		} else {
				echo '<p><strong>ID is missing</strong></p>';
		}

	}

	?>

	<a href="students.php">View Students</a>

</body>
</html>