<?php

/*
- The PHP do...while Loop

The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

- Syntax

do {
  code to be executed;
} while (condition is true);
*/

$x = 11;

do {

	echo $x;
	$x++;

} while ($x <= 5);

/*
Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. 
*/

?>