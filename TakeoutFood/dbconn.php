<?php

$con = @mysqli_connect('localhost', 'root', 'vishnu10', 'TakeoutFood');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
else
{
	#echo "Connected";
}


?>