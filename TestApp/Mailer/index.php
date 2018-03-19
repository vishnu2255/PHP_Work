<?php

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->SMTPAuth=true;
$mail->Username='vishnur304@gmail.com';
$mail->Password='Lenovo@vish23';

$mail->SMTPSecure = 'ssl';

$mail->setFrom(address: 'vishnur304@gmail.com',name: 'Vishnu');

$mail->AddAddress(address: 	'vishnuvkb@hotmail.com');
// $mail->AddCC($_POST['email'],$_POST['name']);
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Subject = "Subject";
$mail->Body = 'Hey Message';

if($mail->Send())
{
$error = '<label class="text-success">Thank You for contacting </label>';
}
else
{
$error = '<label class="text-danger">There is an error</label>';
}


echo $error;	

?>
