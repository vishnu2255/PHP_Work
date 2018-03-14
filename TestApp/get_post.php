<?php
//if(isset($_GET['name']))
{
	// echo $_GET['name'];
	// echo '<br>';
	// echo $_GET['Email'];
}

if(isset($_POST['name']))
{
echo $_POST['name'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>	
</head>
<body>

<form method="POST" action="get_post.php">
	<div>
		<label>Name</label>
		<input type="text" name="name">
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="Email">		
	</div>
	<input type="submit" value="submit">
</form>
</body>
</html>