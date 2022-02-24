<?php

/*
- The PHP for Loop

The for loop - Loops through a block of code a specified number of times.
The for loop is used when you know in advance how many times the script should run.

- Syntax

for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

- Parameters:

1. init counter: Initialize the loop counter value
2. test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
3. increment counter: Increases the loop counter value

*/

for ($x = 1 ; $x <= 5 ; $x++) {
	echo $x;
}

?>