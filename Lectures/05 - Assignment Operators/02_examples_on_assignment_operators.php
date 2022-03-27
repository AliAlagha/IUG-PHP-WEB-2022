<?php

#examples:
#1
$v = 5;
$v = $v + (3 * 4);	#origin
$v += (3 * 4);		# with operators
echo '$v = ' . $v . ' ';

#2
$v1 = 4;
$v2 = 3;
$v1 = $v1 + $v2 + $v1 * 2;	#origin
$v1 += $v2 + $v1 * 2;		# with operators
echo '$v1 = ' . $v1;

?>