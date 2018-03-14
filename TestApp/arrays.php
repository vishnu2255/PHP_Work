
<?php

#Array
/*
- Indexed
- Associative
-Multi-dimensional

*/
$people = array('Kevin','vish','savi');

//echo $people[0];
$ids= array(1,2,3,4,5);

$cars = ['Honda','Toyota','Sara'];
$cars[3] = 'Che';
$cars[] = 'ABC';

//echo count($cars);
//echo $cars[4];

//associative arrays

$contacts = [1 => 'vish',2=> 'savi',3=>'sita'];
$contacts2 = array(1=>'vishnu',2=>'reddy');

echo $contacts[1];
echo $contacts2[2];
var_dump($contacts);

//multi dimesnional

$car = array(
	array('h1','w1',22),
	array('h3','w3',21),
	array('h2','w2',23)
);

echo $car[0][2];

?>

