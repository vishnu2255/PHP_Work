<?php
session_start();

// initializing variables
  $username = "";
  $email    = "";
  $password_1 = "";
  $password_2 = "";
  $phonecode  = "";
  $phonenumber  = "";
  $address  = "";
  $select_country  = "";
  $select_state  ="";
  $zipcode = "";
  $errors = array();

$con = @mysqli_connect('localhost', 'root', 'vishnu10', 'TakeoutFood');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
else
{
	#echo "Connected";
}


   
  if(isset($_POST['reg_user']))
  {


  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
  $phonecode  = mysqli_real_escape_string($con, $_POST['phonecode']);
  $phonenumber  = mysqli_real_escape_string($con, $_POST['phonenumber']);
  $address  = mysqli_real_escape_string($con, $_POST['address']);
  $select_country  = mysqli_real_escape_string($con, $_POST['select_country']);
  //$select_state  = mysqli_real_escape_string($con, $_POST['select_state']);
  $zipcode  = mysqli_real_escape_string($con, $_POST['zipcode']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Confirm Password is required"); }
  if (empty($phonecode)) { array_push($errors, "Phonecode is required"); }
  if (empty($phonenumber)) { array_push($errors, "Phonenumber is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($select_country)) { array_push($errors, "Country is required"); }
  if (empty($select_state)) { array_push($errors, "State is required"); }
  if (empty($zipcode)) { array_push($errors, "Zipcode is required"); }


  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  } 

   // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM USERS WHERE USER_ID='$username' OR EMAIL_ID='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if (strtolower($user['USER_ID']) === strtolower($username)) {
      array_push($errors, "Username already exists");
    }

    if (strtolower($user['EMAIL_ID']) === strtolower($email)) {
      array_push($errors, "email already exists");
    }
  }


// Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO USERS 
              (USER_ID ,EMAIL_ID ,PASSWORD ,PHONECODE,PHONENUMBER,ADDRESS,COUNTRY,STATE,ZIPCODE)
VALUES('$username', '$email', '$password','$phonecode','$phonenumber','$address','$select_country','$select_state','$zipcode')";

  	if(mysqli_query($con, $query))
  	{
  		echo 'saved';

  	}
  	else
  	{
  		echo 'not saved';

  	}
  	

  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  
  }

  }


$username = "";
$password = "";
  if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password_1']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM USERS WHERE USER_ID='$username' AND PASSWORD='$password'";
    $results = mysqli_query($con, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }

  }
}
    

?>