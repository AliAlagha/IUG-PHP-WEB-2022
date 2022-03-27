<?php

/*

if (condition) {
	
}

condition contains logical operator -> true or false

array -> count = 0
if (count($arr)) -> false

array -> count = 5
if (count($arr)) -> true


$str = "A";
if ($str) -> true

$str = '';
if ($str) -> false

true: 1 , not null, not empty, not empty var, not empty array
false: 0, null, empty, empty var, empty string, empty array
*/

$one_var = 1;
$zero_var = 0;
$not_empty_var = "Hello";
$empty_var = '';
$not_null_var = 58.24;
$null_var = null;
$not_empty_arr = [5, 15, null, 7];
$empty_arr = [];

if ($one_var){
	echo "1 -> True";
} else {
	echo "False";
}

if ($zero_var){
	echo "True";
} else {
	echo "0 -> False";
}

if ($not_empty_var){
	echo "Not Empty Var -> True";
} else {
	echo "False";
}

if ($empty_var){
	echo "True";
} else {
	echo "Empty Var -> False";
}

if ($not_null_var){
	echo "Not Null Var -> True";
} else {
	echo "False";
}

if ($null_var){
	echo "True";
} else {
	echo "Null Var -> False";
}

if ($not_empty_arr){
	echo "Not Empty Array -> True";
} else {
	echo "False";
}

if ($empty_arr){
	echo "True";
} else {
	echo "Empty Array -> False";
}

?>