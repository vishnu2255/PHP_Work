<!-- //$con = @mysqli_connect('localhost', 'root', 'vishnu10', 'TakeoutFood');
// $con = @mysqli_connect('bowencorp.startlogicmysql.com', 'thinkb1213', 'Carnival@123', 'carnival_1982_dev1');

 -->
 <?php 

$con =  mysql_connect('bowencorp.startlogicmysql.com', 'thinkb1213', 'Carnival@123'); 


if (!$con) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(carnival_1982_dev1); 

?>

