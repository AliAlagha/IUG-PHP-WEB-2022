<!--

- HTML File Paths

A file path describes the location of a file in a web site's folder structure.

- File Path Examples:

1)	Path:			<a href="second_page.php">Go to the Second Page</a>
	Description:	The "second_page.php" file is located in the same folder as the current page

2)	Path:			<a href="inside/third_page.php">Go to the Third Page</a>
	Description:	The "third_page.php" file is located in the inside folder in the current folder

3) 	Path:			<a href="../first_page.php">Go to the First Page</a>
	Description:	The "first_page.php" file is located in the folder one level up from the current folder

-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- 
	- Absolute File Paths
	An absolute file path is the full URL to a file: 
	-->

	<p><a href="https://www.w3schools.com/images/picture.jpg">Go to Google</a></p>

	<!--
	- Relative File Paths
	A relative file path points to a file relative to the current page.
	-->
	
	<p><a href="second_page.php">Go to the Second Page</a></p>

	<p><a href="inside/third_page.php">Go to the Third Page</a></p>
</body>
</html>

<!--
- Best Practice

It is best practice to use relative file paths (if possible).

When using relative file paths, your web pages will not be bound to your current base URL. All links will work on your own computer (localhost) as well as on your current public domain and your future public domains.
-->