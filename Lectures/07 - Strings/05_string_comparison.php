<?php

$str1 = "Ali";
$str2 = "ali";

// case-sensitive comparison
// Returns true if $str1 is equal to $str2
if ($str1 == $str2) {
	echo "YES case-sensitive";
}

// case-sensitive comparison
// Returns true if $str1 is equal to $str2, and they are of the same type
if ($str1 === $str2) {
	echo "YES case-sensitive";
}

/*
case-sensitive comparison

The strcmp() function compares two strings.
The strcmp() function is case-sensitive.

Return Value:	This function returns:
0 - if the two strings are equal
<0 - if $str1 is less than $str2
>0 - if $str1 is greater than $str2
*/
if (strcmp($str1, $str2) == 0) {
	echo "YES case-sensitive";
}

/*
case-insensitive comparison

The strcasecmp() function compares two strings.
The strcasecmp() function is case-insensitive.

Return Value:	This function returns:
0 - if the two strings are equal
<0 - if $str1 is less than $str2
>0 - if $str1 is greater than $str2
*/
if (strcasecmp($str1, $str2) == 0) {
	echo "YES case-insensitive";
}

?>