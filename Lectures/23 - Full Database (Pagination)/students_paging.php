<?php

include_once('includes/DB_connection.php');
include_once('includes/system_constants.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Students</title>
	<!-- Note: Bootstrap library was used to improve page design. -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Image</th>
							<th>Name</th>
							<th>Email</th>
							<th>Date of Birth</th>
							<th>Nationality</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						
						<?php

						$limit = 5;
						$page = (!empty($_GET['page'])) ? $_GET['page'] : 1; 
						$offset = ($page - 1) * $limit;

						$query = "SELECT id, name, email, birth_date, nationality, image FROM student LIMIT $limit OFFSET $offset";
						$result = mysqli_query($connection, $query);
						if ($result) {
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){

									echo '<tr>' . '<td>' . $row['id'] . '</td>' 
										. '<td><img width="30px" src="' . $system['storage_base_url'] . $row['image'] . '"></td>'
										. '<td>' . $row['name'] . '</td>'
										. '<td>' . $row['email'] . '</td>' . '<td>' . $row['birth_date'] . '</td>'
										. '<td>' . $row['nationality'] . '</td>'
										. '<td><a href="edit_form.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>' . '</td>'
										. '<td><form action="delete_action.php" method="POST">
											<input type="hidden" name="id" value="' . $row['id'] . '">
											<input type="submit" value="DELETE" class="btn btn-danger"></form></td>';

								}
							}
						}

						?>

					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			
			<?php 

			$query = "SELECT count(id) as rows_no FROM student";
			$result = mysqli_query($connection, $query);
			if ($result) {
				$row = $result->fetch_assoc();
				$rows_no = $row['rows_no'];
				$pages = ceil($rows_no / $limit);

				echo '<ul class="pagination">';
				for ($i=1; $i <= $pages ; $i++) { 
					
					echo '<li class="page-item"><a href="?page=' . $i . '" class="page-link">' . $i . '</a></li>';

				}
				echo '</ul>';
			}

			?>

		</div>
	</div>
	
</body>
</html>