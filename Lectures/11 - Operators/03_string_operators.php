<?php

/*
PHP String Operators

- PHP has two operators that are specially designed for strings.

1) 	Operator:	.			
	Name:		Concatenation
	Example:	$txt1 . $txt2
	Result:		Concatenation of $txt1 and $txt2

2) 	Operator:	.=			
	Name:		Concatenation assignment
	Example:	$txt1 .= $txt2
	Result:		Appends $txt2 to $txt1
*/

$str1 = "Hi";
$str2 = "World";

$str3 = $str1 . ' ' . $str2;

echo $str3;

################################

// var = var + 5  -> var += 5

$string1 = "Hello ";
$string2 = "World";

$string1 .= $string2;

echo $string1;

?>