<?php

$errors='';
$name='';
$email='';
$message='';

if(isset($_POST['submit']))
{
if (empty($_POST['name']))
{
$errors .= "<p class=alert-danger> Please Enter Name </p>";
}
else
{
	$name = $_POST['name'];

}

if(empty($_POST['email']))
{
$errors .= "<p class=alert-danger> Please Enter Email ID </p>";
}
else
{
$email = $_POST['email'];
if(FILTER_VAR($email,FILTER_VALIDATE_EMAIL) === false)
{
$errors .= "<p class=alert-danger> Please Enter Email ID </p>";
}
}

if(empty($_POST['message']))
{
$errors .= "<p class=alert-danger> Please Enter Message</p>";
}
else
{
$message=$_POST['message'];

}

}
if($errors!='')
{
require 'class/PHPMailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->SMTPAuth=true;
$mail->Username='vishnur304@gmail.com';
$mail->Password='Lenovo@vish23';

$mail->SMTPSecure = 'ssl';

$mail->setFrom(address:$_POST['email'],name: $_POST['name']);

$mail->AddAddress('vishnuvkb@hotmail.com','Vishnu');
// $mail->AddCC($_POST['email'],$_POST['name']);
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Subject = "Subject";
$mail->Body = $_POST['message'];

if($mail->Send())
{
$error = '<label class="text-success">Thank You for contacting </label>';
}
else
{
$error = '<label class="text-danger">There is an error</label>';
}
$name='';
$email='';
$message='';

}
else
{
echo $errors;	
}



?>



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