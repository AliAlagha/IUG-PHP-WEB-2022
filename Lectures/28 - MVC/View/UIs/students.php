<?php 

include_once('../../Controller/Classes/StudentsController.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students</title>
</head>
<body>

	<?php 

	$studentsController = new StudentsController();
	$table_html_element = $studentsController->getAllStudents();
	echo $table_html_element;

	?>

</body>
</html>