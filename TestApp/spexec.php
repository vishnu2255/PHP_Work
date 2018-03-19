<?php
session_start();

// initializing variables

$con = @mysqli_connect('localhost', 'root', 'vishnu10', 'TakeoutFood');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
else
{
	echo "Connected";
}



 $user_check_query1 = "select EVENTTYPE from EVENT_TYPE;";
 $result1 = mysqli_query($con, $user_check_query1);

while ($r = mysqli_fetch_assoc($result1)) {
  # code...
  echo $r['EVENTTYPE'];
  echo '<br>';

}

//   $user_check_query = "call SP_NEWYEARSEVE()";
//   $result = mysqli_query($con, $user_check_query);
//   // $user = mysqli_fetch_assoc($result);

// // print_r($result);
// // var_dump($result);


// while ($r = mysqli_fetch_assoc($result)) {
//   # code...
//   echo $r['NEWYEARSEVE_TYPE'];
//   echo '<br>';

// }


  $user_check_query2 = "SELECT DISTINCT NEWYEARSEVE_TYPE FROM NEWYEARSEVE;";
  $result2 = mysqli_query($con, $user_check_query2);
  // $user = mysqli_fetch_assoc($result);

// print_r($result);
// var_dump($result);


while ($r = mysqli_fetch_assoc($result2)) {
  # code...
  echo $r['NEWYEARSEVE_TYPE'];
  echo '<br>';

}

// echo '<br>';
// print_r($user);

?>


<?php
$con = @mysqli_connect('localhost', 'root', 'vishnu10', 'TakeoutFood');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
  exit();
}
else
{
  echo "Connected";
}



 $user_check_query1 = "select EVENTTYPE from EVENT_TYPE;";
 $result1 = mysqli_query($con, $user_check_query1);

while ($r = mysqli_fetch_assoc($result1)) {
  # code...
  echo $r['EVENTTYPE'];
  echo '<br>';
  

}
?>

