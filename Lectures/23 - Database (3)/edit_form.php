<?php

include_once 'includes/DB_connection.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = "SELECT * FROM student WHERE id = $id limit 1";
	$result = mysqli_query($connection, $query);

	if ($result) {
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
		}
	} 
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Student</title>
</head>
<body>

	<form action="edit_action.php?id=<?php echo $_GET['id'] ?>" method="POST"> 
		<label for="name">Name</label>
		<input type="text" name="name" id="name" value="<?php echo isset($row) ? $row['name'] : "" ?>">
		<br>

		<label for="email">Email</label>
		<input type="text" name="email" id="email" value="<?php echo isset($row) ? $row['email'] : "" ?>">
		<br>

		<label for="birth_date">Date of Birth</label>
		<input type="text" name="birth_date" id="birth_date" value="<?php echo isset($row) ? $row['birth_date'] : "" ?>">
		<br>

		<label for="nationality">Nationality</label>
		<select name="nationality" id="nationality">
			<option value="-1"></option>
			<option value="PAL" <?php if (isset($row) && $row['nationality'] == 'PAL') echo "selected" ?>>Palestinian</option>
			<option value="SYR" <?php if (isset($row) && $row['nationality'] == 'SYR') echo "selected" ?>>Syrian</option>
		</select>
		<br>

		<input type="submit" value="Save">
	</form>
</body>
</html>