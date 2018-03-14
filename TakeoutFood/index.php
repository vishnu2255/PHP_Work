<?php
 session_start(); 
// $_SESSION['username']

if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="content">

	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3> <strong>Welcome 
          <?php 
            echo $_SESSION['username'] . '! ';
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	<strong>
      	</h3>
      </div>
  	<?php endif ?>	
</div>
</body>
</html>





