<?php

$var1 = 'This is a string';
$var2 = "This is a string";

// The strlen() function returns the length of a string.
$string_length = strlen($var1);

// The str_word_count() function counts the number of words in a string.
$string_word_count = str_word_count($var1);

// The strrev() function reverses a string.
$reverse_string = strrev($var1);

// The strpos() function finds the position of the first occurrence of a string inside another string.
$string_position = strpos($var1, 'is'); // $string_position value equals 2
$string_position2 = strpos($var1, 'nnnnnn'); // $string_position2 value equals false

var_dump($string_position2); // bool(false)
echo $string_position2; // echo will not print the value false

$string_after_replace = str_replace('string', 'my string', $var1);

?>