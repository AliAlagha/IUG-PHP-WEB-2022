<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	# Validation of existing of inputs
	if (isset($_POST['product_name']) && isset($_POST['product_description'])
		&& isset($_POST['product_price'])) {
		
		$product_name = $_POST['product_name'];
		$product_description = $_POST['product_description'];
		$product_price = $_POST['product_price'];

		echo 'Name: ' . $product_name . ', Description: ' . $product_description . ', Price: ' . $product_price;

		# Required validation
		if (!empty(trim($product_name))&& !empty(trim($product_price))) {
			
			# Length validation
			if (strlen($product_name) > 12) {
				# Continue in your code
				echo ", The length of product name input is legal";
			}

			# Number validation 
			# is_numeric () used for any type of numeric
			if (is_numeric($product_price)) {
				# Continue in your code
				echo ", The product price input has no character (any type of numeric)";
			}

			# Number validation 
			# If you want only integer (without floating point), use ctype_digit
			if (ctype_digit($product_price)) {
				# Continue in your code
				echo ", The product price input has no character (only integer (without floating point))";
			}

		}
		
	} else {
		echo "Validation Error";
	}
	
}

?>