<?php 

include('entities/student.php');

$student = new student();
$student->set_id(5624);
$student->set_name("Omar");
$student->set_phone("0599354258");

echo 'ID: ' . $student->get_id() . ', Name: ' . $student->get_name() 
. ', Phone: ' . $student->get_phone();

?>