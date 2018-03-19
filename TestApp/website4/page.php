
<?php

if(isset($_POST['submit']))
{
session_start();
$_SESSION['name'] = htmlentities($_POST['name']);
$_SESSION['email'] = htmlentities($_POST['email']);

header('Location: page2.php');
}


?>




<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>	
</head>
<body>

<form method="POST" action="">
	<div>
		<label>Name</label>
		<input type="text" name="name">
	</div>
	<div>
		<label>Email</label>
		<input type="email" name="email">		
	</div>
	<input type="submit" value="submit" name="submit">
</form>


</body>
</html>
