<?php

#Loops 

/*
While 
For
Do while
For each
*/

for($i=0;$i<10;$i++)
{
	echo $i;
	echo '<br>';
}

$j=0;
while ($j<10) {
	
	echo $j+10;
	echo '<br>';
	$j++;
}

$k=0;
 do{
echo $k*10; 
echo '<br> ';	
//echo '<ul> <li> ' $k  '</li> </ul>';
$k++;
 }
while($k<10);

$peop = ['test1','test2','test3','test4','test5'];

foreach($peop as $person)
{
echo $person;
echo '<br>';
}

$peop1 = ['test1' =>1,'test2'=>2];

foreach($peop1 as $person => $val)
{

echo  " $person , $val" ;
echo '<br>';

}

?>