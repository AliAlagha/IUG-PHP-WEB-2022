<?php

// float to int
$float_var = 14.25;
$int_var = intval($float_var);
var_dump($int_var);

// int to float
$int_var2 = 15;
$float_var2 = floatval($int_var2);
var_dump($float_var2);

// float to str 
$float_var3 = 150.456;
$str_var = strval($float_var3);
var_dump($str_var);

// int to str 
$int_var3 = 150;
$str_var2 = strval($int_var3);
var_dump($str_var2);

// str to float example 1
$str_var3 = "150.456";
$float_var4 = floatval($str_var3);
var_dump($float_var4);

// str to float example 2
$str_var4 = "150";
$float_var5 = floatval($str_var4);
var_dump($float_var5);

// str to int example 1
$str_var5 = "150";
$int_var4 = intval($str_var5);
var_dump($int_var4);

// str to int example 2
$str_var6 = "150.456";
$int_var5 = intval($str_var6);
var_dump($int_var5);

// Wrong conversion from string to number
$str_var7 = "Hello";
$float_var6 = floatval($str_var7); // $float_var6 value equals 0 
var_dump($float_var6); 

?>