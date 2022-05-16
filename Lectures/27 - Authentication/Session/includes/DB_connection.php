<?php

$connection = mysqli_connect('localhost', 'root', '', 'users_db');

if (!$connection) {
	echo "Connection Failed";
	die("Connection Failed: " . mysqli_connect_error());
}

?>