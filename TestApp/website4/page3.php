<?php

session_start();
$name = isset($_SESSION['name'])? $_SESSION['name'] : 'Guest';
$email = $_SESSION['email'];

var_dump($_SESSION);
print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Page 3 </title>
</head>
<body>

<h1> Hello
<?php
echo $name . ' , ' . $email; 

?>
</h1>
</body>
</html>