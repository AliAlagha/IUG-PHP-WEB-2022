<?php 

setcookie("is_login", false, time() - 1);

header("Location: http://localhost:84/authentication/Cookie/login.php");

?>