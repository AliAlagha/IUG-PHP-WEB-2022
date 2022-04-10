<?php

include_once('includes/DB_connection.php');

/*

- student table: id, name, email

The following example creates a table called "student" that contains three columns: id, name, email:

CREATE TABLE student
(
id int primary key auto_increment,
name text,
email text
);

*/

$query = "SELECT * FROM student";
$result = mysqli_query($connection, $query);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo $row['id'] . ' - ' . $row['name'] . ' ';
	} 
}

?>