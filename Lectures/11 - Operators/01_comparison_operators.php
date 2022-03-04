<?php

/*
PHP Comparison Operators

- The PHP comparison operators are used to compare two values (number or string):

1) 	Operator:	>	
	Name:		Greater than		
	Example:	$x > $y
	Result:		Returns true if $x is greater than $y

2) 	Operator:	<
	Name:		Less than		
	Example:	$x < $y
	Result:		Returns true if $x is less than $y

3) 	Operator:	>=			
	Name:		Greater than or equal to		
	Example:	$x >= $y
	Result:		Returns true if $x is greater than or equal to $y

4) 	Operator:	<=			
	Name:		Less than or equal to		
	Example:	$x <= $y
	Result:		Returns true if $x is less than or equal to $y

5) 	Operator:	==			
	Name:		Equal		
	Example:	$x == $y
	Result:		Returns true if $x is equal to $y

6) 	Operator:	!=			
	Name:		Not equal		
	Example:	$x != $y
	Result:		Returns true if $x is not equal to $y

7) 	Operator:	===			
	Name:		Identical		
	Example:	$x === $y
	Result:		Returns true if $x is equal to $y, and they are of the same type

8) 	Operator:	!==			
	Name:		Not identical		
	Example:	$x !== $y
	Result:		Returns true if $x is not equal to $y, or they are not of the same type
*/

$int1 = 55;
$int2 = 14;

if ($int1 == $int2) {
	echo "YES";
}

#########################

$str1 = "Ali";
$str2 = "ali";

if ($str1 < $str2) {
	echo "STR YES";
}

#########################

$int1 = 55;
$int2 = "55";

if ($int1 == $int2) {
	echo " T YES";
}

if ($int1 != $int2) {
	echo " T YES";
}

if ($int1 === $int2) {
	echo " T YES";
}

if ($int1 !== $int2) {
	echo " T YES";
}

?>