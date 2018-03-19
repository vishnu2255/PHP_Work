<!DOCTYPE html>
<html>
<head>
	<title>Event Submission</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">    
	</script>

	 <script type="text/javascript">
	 	


	 </script>
</head>
<body>

<div class="container">

<form>
	



<div class="header">
<h2>Event Date</h2>
</div>
<label for="eventtype">Event Type </label>
<div class="form-group" id="eventtype">
	<input type="radio" name="eventtypes" value="Special" onclick="generateCalendar()" checked>
<label>Special</label>
	<input type="radio" name="eventtypew" value="Weekly" onclick="generateCalendar()">
<label>Weekly</label>
</div>

<div class="form-group" id="calendar">
	
</div>

<hr>



<div class="form-group row" >

	<div class="col-sm-4">
		<label for="eventname" > Event Name</label>
		<input type="text" name="eventname" id= "eventname" class="form-control">
	</div>

	<div class="col-sm-4">
		<label for="club" > Club/Lounge</label>
		<select name="clublist" id= "clublist" class="form-control" onclick="getClubList()">
			
		</select>
		<!-- <input type="text" name="club" id= "club" class="form-control"> -->
	</div>

	<div class="col-sm-4">
		<label for="hours" > Hours</label>
		<input type="text" name="hours" id= "hours" class="form-control">
	</div>

   </div>

<div class="form-group row">

	<div class="col-xs-2 col-md-4">
		<label for="PhoneNumber" > PhoneNumber</label>
		<input type="text" name="PhoneNumber" id= "PhoneNumber" class="form-control">
	</div>

	<div class="col-xs-2 col-md-4">
		<label for="email" > Email</label>
		<input type="email" name="email" id= "email" class="form-control">
			
		<!-- </select> -->
		<!-- <input type="text" name="club" id= "club" class="form-control"> -->
	</div>

	<div class="col-xs-2 col-md-4">
		<label for="website" > Website</label>
		<input type="text" name="website" id= "website" class="form-control">
	</div>

   </div>   

<div class="form-group row" >
	<label for="description">Description</label>
	
		<textarea class="col-xs-12 col-md-12 form-control" rows="5" id="description" name="description">
			
		</textarea>
	
</div>


<div class="form-group row">
	<label for="notes">Notes</label>
	
		<textarea class="col-xs-12 col-md-12 form-control" id="notes" name="notes">
			
		</textarea>
	
</div>

<div class="form-group row">
	<label for="notes">Images</label>
	
		<input class="col-xs-12 col-md-12 form-control" id="notes" name="notes">						
</div>

<div class="form-group row">
	<label for="djlist">DJ's List</label>
	
		<input class="col-xs-12 col-md-12 form-control" id="djlist" name="djlist">						
</div>
<br>

<h2>Event Details</h2>

<div class="form-group">
<br>

<div>
	<label>New Years Eve</label>	
<label class="checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" value="ClubEvent"> Club Event
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="HotelEvent"> Hotel Event
</label>
						
</div>
</div>

<div class="form-group">
	<label for="">Event Type</label>
	<br>
	<p>Select the categories that best describe your venue (please do not select all the categoires)</p>

<div id="eventtypecategories">
	<?php require_once("getElements.php");
	
	 echo funct("categories");

	 ?>
</div>

</div>

<div class="form-group">
	<label for="">Minimum Age</label>
	<br>

	<p> Select the minimum age required to attend the event </p>
<div id="minimumagelist">
<?php require_once("getElements.php");
	echo funct("agelist");

	 ?>	
</div>

</div>

<div class="form-group">
	<label for="">Music</label>
	<br>
	<p> Select the types of music that is played at the venue </p>
  
<div id="musiclist">
  <?php require_once("getElements.php");
	echo funct("musiclist");
	 ?>	
</div>

</div>


<div class="form-group">
	<label for="">Cover</label>
	<p> Please select cover price with and without guestlist </p>

<div id="coverpricelist">
	 <?php require_once("getElements.php");
	echo funct("coverpricelist");
	 ?>	
</div>

<div class="form-group">
	<label for="">Dress code</label>
	<p> Please select ONE of the appropriate dress codes that apply</p>

<div id="dresscodelist">
	 <?php require_once("getElements.php");
	  // $output=[];

    $output = funct("dresscodelist");
	// var_dump($output);

	// print_r(funct("dresscodelist"));
	 ?>

</div>

<div>
	<?php foreach ($output as $val): ?>


	<input type="checkbox" name="">
	<?php echo $val ?>
	<?php endforeach; ?>	


</div>


</form>

</div>






</body>
</html>