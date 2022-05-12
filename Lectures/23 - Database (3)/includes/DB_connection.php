<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'students_db';

$connection = mysqli_connect($host, $username, $password, $db_name);

// Check if connection successful
if (!$connection) {
	echo 'Connection Failed';
	// The die() function prints a message and exits the current script.
	die('Connection Failed' . mysqli_connect_error());
}

?>