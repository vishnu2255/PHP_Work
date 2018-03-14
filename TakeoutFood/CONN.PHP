
<?php


$con = @mysqli_connect('localhost', 'root', 'vishnu10', 'TakeoutFood');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
echo 'Connected to MySQL';

$sql 	= 'SELECT * FROM USERS';
$query 	= mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query))
{
	echo $row['USER_ID'];
}

mysqli_close ($con);

?>