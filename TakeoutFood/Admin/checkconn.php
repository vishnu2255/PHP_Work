<?php

//$con = @mysqli_connect('localhost', 'root', 'vishnu10', 'TakeoutFood');
$con = @mysqli_connect('bowencorp.startlogicmysql.com', 'thinkb1213', 'Carnival@123', 'carnival_1982_dev1');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
else
{
	echo "Connected";
}




?>