<?php

/*
Nesting Loops

- nested loop is a loop within a loop, an inner loop within the body of an outer one.
*/

for ($i = 1 ; $i <= 10 ; $i++) {
	echo $i.' ';
	for ($j = 11 ; $j <= 20 ; $j++) {
		echo $j. ' ';
	}
}

?>