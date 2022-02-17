<?php

# Get character by index
$str = "Hi, hello world! I'm developer";
# echo $str[10];	# w

########################

/* 
substr(string,start,length)

string:	 Required. Specifies the string to return a part of
start:	 Required. Specifies where to start in the string
length:	 Optional. Specifies the length of the returned string. Default is to the end of the string.
*/

$new_string = substr($str, 4); # hello world! I'm developer

# echo strpos($str, '!');
$new_string2 = substr($str, 0, strpos($str, '!')+1);
echo $new_string2;


?>