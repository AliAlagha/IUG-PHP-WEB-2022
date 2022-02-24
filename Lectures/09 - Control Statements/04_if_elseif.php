<?php

$mark = 88;

if ($mark >= 90 && $mark <= 100) {
	echo "A";
}

else if ($mark >= 80 && $mark < 90) {
	echo "B";
}

else if ($mark >= 70 && $mark < 80) {
	echo "C";
}

else if ($mark >= 60 && $mark < 70) {
	echo "D";
}

else if ($mark >= 0 && $mark < 60) {
	echo "F";
}

else {
	echo "Error";
}




?>