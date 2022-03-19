<?php

/*
- PHP Include Files

The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.

Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.


- PHP include and require Statements

It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.

- The include and require statements are identical, except upon failure:

require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue

- Use require when the file is required by the application.
- Use include when the file is not required and application should continue when file is not found.


- PHP | include_once() and require_once()

include_once() Function

The include_once() function can be used to include a PHP file in another one, when you may need to include the called file more than once. If it is found that the file has already been included, calling script is going to ignore further inclusions.

If a file named a.php is a php script calling b.php with include_once() function, and does not find b.php, a.php executes with a warning, excluding the part of the code written within b.php.


require_once() Function

require_once() function can be used to include a PHP file in another one, when you may need to include the called file more than once. If it is found that the file has already been included, calling script is going to ignore further inclusions.

If a.php is a php script calling b.php with require_once() function, and does not find b.php, a.php stops execution causing a fatal error.
*/

include('second.php');
include_once('second.php');
//require('second.php');
//require_once('second.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>THIRD</h1>

	<p>The sum of 5 and 6 = <?php echo getSum(5,6); ?> </p>
</body>
</html>