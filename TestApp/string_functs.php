<?php 

$output = substr('Hello',2);
echo $output;

// echo substr_count('haystack', 'needle');

// echo '<br>';

// echo strlen('string');

// echo '<br>';
// echo strrpos('haystack', 's');

$text = "test";
var_dump(trim($text));

 
 echo '<br>';


$test = '1';
$val = is_string($test);
echo $val;


$val = array(true,false,null,'abc',23,01,22.5,' ','','0');

foreach ($val as $v) {
	# code...
	if(is_string($v))
	{
		echo "{$v} is a string<br>";
	}
}


$string = gzcompress("data");
echo $string;



echo gzuncompress($string);


 ?>