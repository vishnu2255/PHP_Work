<?php
include("dbconn.php");
function($val)
{

switch ($val) {
	case 'categoires':
		# code...
	$user_check_query = "select EVENTTYPE from EVENT_TYPE;";
    $result = mysqli_query($con, $user_check_query);

    return "<div> Categries </>";
		break;
	
	case 'age':
	$user_check_query = "call SP_GET_MINIMUM_AGE()";
    $result = mysqli_query($con, $user_check_query);
    return "<div> Age </>";

    break;

    case 'dresscode':
    $user_check_query = "SELECT DISTINCT DRESS_CODE FROM EVENT_DRESSCODE;";
    $result = mysqli_query($con, $user_check_query);
    return "<div> dresscode </>";



	default:
		# code...
		break;
}

}

?>