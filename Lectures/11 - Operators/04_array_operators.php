<?php

/*
PHP Array Operators

- The PHP array operators are used to compare arrays.

1) 	Operator:	+			
	Name:		Union
	Example:	$x + $y	
	Result:		Union of $x and $y

2) 	Operator:	==			
	Name:		Equality
	Example:	$x == $y
	Result:		Returns true if $x and $y have the same key/value pairs		

3) 	Operator:	===			
	Name:		Identity
	Example:	$x === $y
	Result:		Returns true if $x and $y have the same key/value pairs in the same order and of the same types		

4) 	Operator:	!=		
	Name:		Inequality
	Example:	$x != $y
	Result:		Returns true if $x is not equal to $y		

5) 	Operator:	!==		
	Name:		Non-identity
	Example:	$x !== $y	
	Result:		Returns true if $x is not identical to $y		
*/

# Union , comparison

$arr1 = ["A" => 54 , "B" => 4];
$arr2 = ["C" => 48564, 'D' => "O;la"];

$u_arr = $arr1 + $arr2;

# print_r($u_arr);


######################################

# Indexed - Comparison (equality)

$i_arr1 = [1, 2, 3];
$i_arr2 = [1, 2, 3];
if ($i_arr1 == $i_arr2) {
	echo "1 - YES";
} 

$i2_arr1 = [2, 1, 3];
$i2_arr2 = [1, 2, 3];
if ($i2_arr1 == $i2_arr2) {
	echo "2 - YES";
} 

######################################

# Assocc - Comparison (equality , keys and values)

$ac1_arr1 = ["A" => 11 , "B" => 12];
$ac1_arr2 = ["A" => 11 , "B" => 12];
if ($ac1_arr1 == $ac1_arr2) {
	echo "3 - YES";
}

$ac2_arr1 = ["B" => 12 , "A" => 11];
$ac2_arr2 = ["A" => 11 , "B" => 12];
if ($ac2_arr1 == $ac2_arr2) {
	echo "4 - YES";
}
if ($ac2_arr1 === $ac2_arr2) {
	echo "5 - YES";
}

?>