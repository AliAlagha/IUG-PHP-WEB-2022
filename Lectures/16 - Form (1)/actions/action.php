<?php

# action code for receive and handle data from the form

# Access the meta data and data from the GET request
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$name = $_GET['name'];
	$email = $_GET['email'];

	echo 'GET -> Name: ' . $name . ', Email: ' . $email;
}

# Access the meta data and data from the POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];

	echo 'POST -> Name: ' . $name . ', Email: ' . $email;
}

?>