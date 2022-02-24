<?php

/*
- PHP foreach Loop

The foreach loop - Loops through a block of code for each element in an array.
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

- Syntax

foreach ($array as $value) {
  code to be executed;
}

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
*/

# Indexed Array

$arr = ["E1", "E2", "E3", "E4"];

# Print all the values of an array
foreach ($arr as $element) {
	echo $element . ' ';
}

# Print key and value of an array
foreach ($arr as $index => $element) {
	echo $index . ' => ' . $element . ' ';
}


#################################


# Associative Array

$assoc_arr = ["N1" => "Value 1", "N2" => "Value 2", "N3" => "Value 3"];

# Print all the values of an array
foreach ($assoc_arr as $value) {
	echo $value . ' ';
}

# Print key and value of an array
foreach ($assoc_arr as $key => $value) {
	echo $key . ' => ' . $value . ' ';
}

?>