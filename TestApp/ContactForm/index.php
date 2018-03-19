<?php


$msg = '';
$msgClass='';


if(filter_has_var(INPUT_POST, 'submit'))
{
// echo INPUT_POST;
#echo 'submitted';
//get form data

$name = $_POST['name'];
$email =$_POST['email'];
$message = trim($_POST['message']);


if(!empty($name) && !empty($email) && !empty($message))
{

//passed

	if(FILTER_VAR($email,FILTER_VALIDATE_EMAIL) === false)
	{
		$msg = "Please use valid email address";
        $msgClass = "alert-danger";

	}
	else
	{
		$toEmail = 'vishnur304@gmail.com';
		$tosubject = 'Contact Req Form'. $name ;
		$body  = '<h2> Contact Info</h2>
		<h4>Name</h4> <p> '.$name .' </p>
		<h4>Email</h4> <p>' .$email . ' </p>
		<h4>Message</h4><p>'.  $message.'</p>';
//Headers
		$headers = "MIME-VERSION: 1.0"."\r\n";
		$headers .= "Content-Type : text/html;charset=UTF-8"."\r\n";


//AdditionalHeaers
		$headers .= "From: ".$name. "<">$email.">"."\r\n";

		if(mail($toEmail,$tosubject,$body,$headers))
		{

			$msg = "Your Email has been sent";
            $msgClass = "alert-success";

		} else
		{
			$msg = "Your Email was not sent";
            $msgClass = "alert-danger";
		}

	}

}
else
{
$msg = "Please fill in all fields";
$msgClass = "alert-danger";


}

}
?>

<!DOCTYPE html>
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

<?php if($msg!=' '):?>
<div class="<?php echo $msgClass ?>">
<?php

echo $msg;


?>

</div>
<?php endif; ?>
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
             <?php echo isset($_POST['message']) ? $message : '' ?>
			</textarea>		
 			
		</div>		
			<button type="submit" name="submit" class="btn btn-primary">
				Submit
			</button>		
	</form>
</div>

</body>
</html>