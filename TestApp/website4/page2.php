<?php

session_start();

$name =$_SESSION['name'];
$email =  $_SESSION['email'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>	
</head>
<body>

<h1>
	Thank You <?php echo $_SESSION['name'];  ?>
	You have subscribed with the email <?php  echo $_SESSION['email'] ; ?>
</h1>

<a href="page3.php">Go to page3</a>
</body>
</html>
