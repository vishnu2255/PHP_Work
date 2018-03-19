<?php


if(isset($_GET['name']))
{
$name =  htmlentities($_GET['name']);
}

// echo $_SERVER['QUERY_STRING'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>	
</head>
<body>

<form method="GET" action="get_post.php">
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

<ul>
	<li><a href="get_post.php?name=Brad">Brad</a></li>
	<li><a href="get_post.php?name=Vish">Vish</a></li>
</ul>
<?php  echo "{$name}'s profile " ?> 
</body>
</html>