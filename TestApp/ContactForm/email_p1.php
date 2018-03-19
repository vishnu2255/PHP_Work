
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		
		<div class="navbar-header">
			
			<a href="index.php" class="navbar-brand">
				My Website
			</a>
		</div>
	</div>
	
</nav>

<div class="container">
	<!-- <div class="<? php echo $msgClass;  ?>" >  <?php  echo $msg ?>  </div> -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?PHP echo isset($_POST['name']) ? $name :'' ?>">
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control"  value="<?PHP echo isset($_POST['email']) ? $email :'' ?>">
			
		</div>

        <div class="form-group">
			<label>Message</label>
			<textarea name="message" class="form-control">
             <?php echo isset($_postT['message']) ? $message : '' ?>
			</textarea>		
 			
		</div>		
			<button type="submit" name="submit" class="btn btn-primary">
				Submit
			</button>		
	</form>
</div>

</body>
</html>