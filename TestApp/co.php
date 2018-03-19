<? php

$db = mysqli_connect('localhost','root','vishnu10','TakeoutFood');

$sql = "select * from NEWYEARSEVE";
$result = mysqli_master_query($db, $sql);

if(($result) == 1)
{
echo 'pass';
}
else
{
	echo 'fail';
}


echo 'test';

?>