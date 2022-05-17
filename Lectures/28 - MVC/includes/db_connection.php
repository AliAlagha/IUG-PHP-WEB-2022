<?php

$connection = mysqli_connect('localhost', 'root', '', 'students_db');

if (!$connection) {
	echo "connection failed";
}

?>