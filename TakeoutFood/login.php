<?php include('server2.php') ?>
<?php include('header.php') ?>
<?php include('footer.php') ?>

	 
   <div class="container">

  <form method="post" action="login.php">
  <!-- 	<?php include('errors.php'); ?> -->
  
  <div class="header">
      <h2> Login </h2>
  </div>

  <?php include('errors.php'); ?>

  <div class="form-group row">
      <label for = "username" class="col-sm-2" ><strong>Username</strong></label>
      <div class="col-sm-6">
      <input type="text" id="username" name ="username" placeholder="Username" class="form-control">
      </div>
  </div>

    <div class="form-group row">
      <label for = "password_1" class="col-sm-2 col-form-label"><strong>Password</strong> </label>
       <div class="col-sm-6">
      <input type="password" id="password_1" name="password_1" placeholder="Password" class="form-control">
       </div>
    </div>
 
   <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="login_user">Login</button>
      </div>
    </div>
  
  <div class="form-group row">
     <p class="offset-sm-2 col-sm-10">
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
    </div>


  </form>
  </div>
