<?php

/*
PHP Functions

PHP Built-in Functions:
- PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

PHP User Defined Functions:
- Besides the built-in PHP functions, it is possible to create your own functions.

- A function is a block of statements that can be used repeatedly in a program.
- A function will not execute automatically when a page loads.
- A function will be executed by a call to the function.

Create a User Defined Function in PHP:
- A user-defined function declaration starts with the word function:

Syntax:

function functionName() {
  code to be executed;
}

Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.
*/

echo getSum(5, 5);


function getSum ($a , $b) {
	return $a + $b;
}


echo getSum(5, 5);


?>