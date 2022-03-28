<?php

/*
PHP Logical Operators

1) 	Operator:	and	
	Name:		And		
	Example:	$x and $y	
	Result:		True if both $x and $y are true

2) 	Operator:	or			
	Name:		Or		
	Example:	$x or $y
	Result:		True if either $x or $y is true
*/

$price = 80;
$product = "WakWak";

if (($product == 'Nestal' or $product == 'Nescafe') and ($price > 50 and $price <= 100)) {

}

?>