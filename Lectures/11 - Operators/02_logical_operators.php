<?php

/*
PHP Logical Operators

- The PHP logical operators are used to combine conditional statements.

1) 	Operator:	&&	
	Name:		And		
	Example:	$x && $y	
	Result:		True if both $x and $y are true

2) 	Operator:	||			
	Name:		Or		
	Example:	$x || $y
	Result:		True if either $x or $y is true

3) 	Operator:	!		
	Name:		Not		
	Example:	!$x
	Result:		True if $x is not true	
*/

$budget = 800;
$price = 80;

if ($budget >= $price) {
	echo "Purchase";
}

###########################

/*
	1. price > 50
	2. price <= 100
*/

if ($price > 50) {
	if ($price <= 100) {
		echo "Purchase";
	}
}


if ($price > 50 && $price <= 100) {
	echo "Purchase";
}

###########################

# Nestal, Nescafe

$product = "WakWak";

if ($product == 'Nestal' || $product == 'Nescafe') {

}

###########################

if (($product == 'Nestal' || $product == 'Nescafe') && ($price > 50 && $price <= 100)) {

}

?>