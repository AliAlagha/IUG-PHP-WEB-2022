<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (isset($_FILES['user_image'])) {
		
		$file_name = $_FILES['user_image']['name'];
		$file_size = $_FILES['user_image']['size'];
		$file_tmp = $_FILES['user_image']['tmp_name'];
		$file_type = $_FILES['user_image']['type'];
		$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

		echo 'Name: ' . $file_name . ', Size: ' . $file_size . ', Tmp Name: ' . $file_tmp . ', Type: ' . $file_type . ', Extension ' . $file_ext;

	}

}

?>