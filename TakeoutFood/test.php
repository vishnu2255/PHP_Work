<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php" class="form-horizontal col-xs-12">
  
  	<div class="form-group">
  	  <label for = "username" class="col-xs-2"> Username </label>
  	  <input type="text" id="username" placeholder="Username" class="col-xs-10">
  	</div>
  	<div class="form-group">
  	  <label for = "email" class="col-xs-2"> Email</label>
  	  <input type="email" id="email" placeholder="Email" class="col-xs-10"> 
  	</div>
  	<div class="form-group">
  	  <label for = "password_1">Password</label>
  	  <input type="password" id="password_1" placeholder="Password">
  	</div>
  	<div class="form-group">
  	  <label for = "password_2" >Confirm password</label>
  	  <input type="password" id="password_2" placeholder="Password">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn btn-default" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>