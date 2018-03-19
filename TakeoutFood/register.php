<?php include('server2.php') ?>
<?php include('header.php') ?>
<?php include('footer.php') ?>
  

<div class="container">
  
  <form method="post" action="register.php" class="form-horizontal">

<div class="header">
    <h1>
      Register
    </h1>
    </div>

<?php include('errors.php'); ?>

  	<div class="form-group row">
  	  <label for = "username" class="col-sm-2 col-form-label"><strong>Username</strong></label>
      <div class="col-sm-6">
  	  <input type="text" id="username" name="username" placeholder="Username" class="form-control" minlength="5" maxlength="20" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
      </div>
  	</div>

  	<div class="form-group row">
  	  <label for = "email" class="col-sm-2 col-form-label"><strong>Email</strong></label>
      <div class="col-sm-6">
  	  <input type="email" id="email" name="email" placeholder="Email" class="form-control" minlength="5" maxlength="20">
    </div>    
  	</div>

  	<div class="form-group row">
  	  <label for = "password_1" class="col-sm-2 col-form-label"><strong>Password</strong> </label>
       <div class="col-sm-6">
  	  <input type="password" id="password_1" name="password_1" placeholder="Password" class="form-control" maxlength="20" minlength="6">
  	   </div>
    </div>

  	<div class="form-group row">
  	  <label for = "password_2" class="col-sm-2 col-form-label"><strong>Confirm Password </strong></label>
  	  <div class="col-sm-6">
      <input type="password" id="password_2" name="password_2" placeholder="Password" class="form-control" minlength="6" maxlength="20">
  	</div>
    </div>

<div class="form-group row">
     <label for = "phonenumber" class="col-sm-2 col-form-label"><strong>Phone Number </strong></label>
      <div class="col-sm-1">
      <input type="text" id="phonecode" name="phonecode" placeholder="Code" class="form-control" maxlength="5">
    </div>

    <div class="col-sm-3">
      <input type="text" id="phonenumber" name="phonenumber" placeholder="Phone" class="form-control" minlength="5" maxlength="20">
    </div>
</div>

   <div class="form-group row">
      <label for = "address" class="col-sm-2 col-form-label"><strong>Address</strong></label>
      <div class="col-sm-6">
      <input type="text" id="address" name="address" placeholder="Address" class="form-control" minlength="5" maxlength="20">
    </div>
    </div>

 <div class="form-group row">
      <label for = "select_country" class="col-sm-2 col-form-label"><strong>Country</strong></label>
      <div class="col-sm-3">
        <select  name ="select_country" id="select_country" class="form-control" onchange="changecountry()">
         <option value="1">Select</option> 
         <option value="1">United States</option> 
         <option value="2">Canada</option>
        </select>
    </div>
  </div>


  <script type="text/javascript">
    $('#select_country').change(function(){

      // $('#select_state').removeAttr('disabled')
      // var val = $(this).val()
      // alert(val)
      // $.post('data.php?p=us',{idprov:val},function(reg){
      //   $('#select_state').html(reg)
      // }

      // $.post
    });


    function changecountry()
    {
       $('#select_state').removeAttr('disabled');
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET","ajax.php?country="+document.getElementById('select_country').value,false);
      xmlhttp.send(null);

      document.getElementById('select_state').innerHTML=xmlhttp.responseText;
      // alert(xmlhttp.responseText);


    }

  </script>



 <div class="form-group row">
      <label for = "select_state" class="col-sm-2 col-form-label"><strong>State</strong></label>
      <div class="col-sm-3">
        <select name = "select_state" id="select_state" class="form-control" disabled="true">
      <!--  <option value="AL">Alabama</option>
       <option value="AK">Alaska</option> -->

        </select>
  </div>

</div>  

  <div class="form-group row">
      <label for = "zipcode" class="col-sm-2 col-form-label"><strong>ZipCode</strong></label>
      <div class="col-sm-3">
      <input type="text" id="zipcode" name="zipcode" placeholder="Zip Code" class="form-control" maxlength="10" minlength="3">
    </div>
  </div>


<div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
      </div>
</div>


<div class="form-group row">
     <p class="offset-sm-2 col-sm-10">
      Already a member? <a href="login.php">Sign in</a>
    </p>  
</div>

</form>

</div>
