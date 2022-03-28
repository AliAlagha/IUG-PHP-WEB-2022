<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (isset($_FILES['user_image'])) {
		
		$file_name = $_FILES['user_image']['name'];
		$file_size = $_FILES['user_image']['size'];
		$file_tmp = $_FILES['user_image']['tmp_name'];
		$file_type = $_FILES['user_image']['type'];
		$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

		if ($file_ext == 'jpg' || $file_ext == 'png') {
				
			if ($file_size < 500000) {

				$file_new_name = strval(time() + rand(1, 1000000000)) . '.' . $file_ext;

				$upload_path = '../uploads/' . $file_new_name;
				move_uploaded_file($file_tmp, $upload_path);

				if (file_exists($upload_path)) {
					echo "Uploaded";
				} else {
					echo "Not Uploaded";
				}

			} else {
				echo "File Too Large";
			}
	
		} else {
			echo "File Type Not Supported";
		}

	}

}

?>