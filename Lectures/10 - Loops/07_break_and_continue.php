<?php

/*
PHP Break

- You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.

- The break statement can also be used to jump out of a loop.
*/

# This example jumps out of the loop when $i is greater than 5:
for ($i = 1 ; $i <= 10 ; $i++) {
	if ($i > 5) {
		break;
	}

	echo "$i ";
}

echo "OUT";

##################################

/*
PHP Continue

- The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
*/

# This example skips the numbers that are divisible by 5:
for ($i = 1 ; $i <= 10 ; $i++) {
	if ($i % 5 == 0) {
		continue;
	}

	echo "$i ";
}

##################################

/*

Using break in a nested loop

- In a nested loop, a break statement only stops the loop it is placed in. Therefore, if a break is placed in the inner loop, the outer loop still continues. However, if the break is placed in the outer loop, all of the looping stops.

for (1 -> 10) {
	for (1 -> 5) {
		if 3 => break;
	}
}

*/

for ($i=1; $i <= 10 ; $i++) { 
	for ($j=1; $j <= 5; $j++) { 
		if ($j == 3) {
			break;
		}

		echo $j . ' ';
	}
}

# Note: You can also use break and continue in while loops.

?>