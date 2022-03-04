<?php

# Prints all even numbers between 1 and 10 using for loop with if statements.
# 1 -> 10

/*
- Initialize counter with 1, and increment it in every iteration.

- For every value of counter check whether it is even number or not and print it accordingly.
*/
for ($i = 1 ; $i <= 10 ; $i++) {
	# Even numbers are divisible by 2
	# If number % 2 == 0 it means its an even number
	if ($i % 2 == 0) {
		# counter is even, print it
		echo $i . ' ';
	}
}

/*
- Prints all even numbers between 1 and 10 using for loop without if statements.

- Even numbers between 1 and 10 can be printed in another way by giving the counter an initial value of 2 since the number 2 is the first even number that comes after the number 1, and increment the counter by 2 at the end of each iteration.
*/
for ($i = 2 ; $i <= 10 ; $i = $i+2) {
	echo $i . ' ';
}

/*
The For loop can include:
- Multiple counters: $i = 2, $j = 1
- Multiple conditions : $i <= 10, $j <= 3
- Multiple increments : $i = $i+2, $j++
*/

for ($i = 2, $j = 1 ; $i <= 10, $j <= 3 ; $i = $i+2, $j++) {
	echo $j . ' ';
}

# You can combine two or more conditions into a compound condition.

# && is a logical and (both conditions need to be true )
for ($i = 2, $j = 1 ; $i <= 10 && $j <= 3 ; $i = $i+2, $j++) {
	echo $j . ' ';
}

# || is a logical or (at least one condition needs to be true )
for ($i = 2, $j = 1 ; $i <= 10 || $j <= 3 ; $i = $i+2, $j++) {
	echo $j . ' ';
}

?>