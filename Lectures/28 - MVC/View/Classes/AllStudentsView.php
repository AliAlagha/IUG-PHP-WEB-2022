<?php 

class AllStudentsView {

	public $students;

	public function output(){

		$html = '<table border="1">';
		$html = $html . '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';

		foreach ($this->students as $student) {
			
			$html = $html . '<tr>';

			$html = $html . '<td>';
			$html = $html . $student->id;
			$html = $html . '</td>';

			$html = $html . '<td>';
			$html = $html . $student->name;
			$html = $html . '</td>';

			$html = $html . '<td>';
			$html = $html . $student->email;
			$html = $html . '</td>';

			$html = $html . '</tr>';

		}

		$html = $html . '</table>';
		return $html;

	}

}

?>