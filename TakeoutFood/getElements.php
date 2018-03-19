<?php

include("dbconn.php");
function funct($val)
{

switch ($val) {
	case 'categories':
		# code...
	// $user_check_query = "select EVENTTYPE from EVENT_TYPE;";
 //    $result = mysqli_query($con, $user_check_query);

    return "<div> Categories <div/>";
		break;
	
	case 'agelist':
	// $user_check_query = "call SP_GET_MINIMUM_AGE()";
 //    $result = mysqli_query($con, $user_check_query);
    return "<div> Age <div/>";

    break;

    case 'dresscodelist':
    $user_check_query = "SELECT DISTINCT DRESS_CODE FROM EVENT_DRESSCODE;";
    $result = mysqli_query($GLOBALS['con'], $user_check_query);
    
    $output = [];
    while ( $user = mysqli_fetch_assoc($result)) 
    {          
      array_push($output, $user['DRESS_CODE']);
    }  
    // var_dump($output);
    // echo $output;
    // foreach ($output as $value) {
    // 	# code...
    // 	echo $value;
    // }
    return $output;

    	case 'coverpricelist':
    		# code...
    		return "<div> cover price <div/>";
    		break;

    		case 'musiclist':
    			# code...
    		return "<div> music <div/>";
    			break;




	default:

	return "<div> default <div/>";
		# code...
		break;
}

}

?>