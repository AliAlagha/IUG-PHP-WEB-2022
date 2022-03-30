<?php

# action code for receive and handle data from the form

# Access the meta data and data from the POST request

/*
- Required validation:

exist, not empty, format
required = exist + not empty

exist -> isset
not empty -> !empty
required -> isset + !empty OR !empty
*/

# Required validation with isset + !empty

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	if (isset($_POST['name']) && isset($_POST['email'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];

		if (!empty($name) && !empty($email)) {
			
			// Here is the code to collect data (GET parameter) in PHP.
			$id = $_GET['id'];

			// Check if the variable $email is a valid email address
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo 'Name: ' . $name . ', Email: ' . $email . ', ID: ' . $id;
			}

		}

	}

}

# # Required validation with !empty
# This code works exactly the same as the previous code

/*if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (!empty($_POST['name']) && !empty($_POST['email'])) {
			
		$name = $_POST['name'];
		$email = $_POST['email'];

		// Here is the code to collect data (GET parameter) in PHP.
		$id = $_GET['id'];

		// Check if the variable $email is a valid email address
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'Name: ' . $name . ', Email: ' . $email . ', ID: ' . $id;
		}

	}

}*/

?>