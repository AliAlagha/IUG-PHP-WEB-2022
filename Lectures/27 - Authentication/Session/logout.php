<?php 

session_start();

session_unset();
session_destroy();

header("Location: http://localhost:84/authentication/Session/login.php");

?>