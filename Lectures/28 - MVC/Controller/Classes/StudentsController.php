<?php 

include_once('../../Model/Student.php');
include_once('../../View/Classes/AllStudentsView.php');

class StudentsController {

	public function getAllStudents(){

		include_once('../../includes/db_connection.php');

		$query = "SELECT * FROM student";
		$result = mysqli_query($connection, $query);
		
		$students = [];

		if ($result) {

			if ($result->num_rows > 0) {
				
				while ($row = $result->fetch_assoc()) {
					
					$student = new Student();
					$student->id = $row['id'];
					$student->name = $row['name'];
					$student->email = $row['email'];

					array_push($students, $student);

				}

			}

		}

		$allStudentsView = new AllStudentsView();
		$allStudentsView->students = $students;
		$html = $allStudentsView->output();
		return $html;

	}

}

?>