<?php

$val = $_REQUEST['q'];

$persons = array('vish','savi','sati','savitri','asravs','keers');

$suggestion='';

if($val!='')
{
$len = strlen($val);

foreach($persons as $p)
{

if(stristr($val,substr($p, 0,$len)))
{

if($suggestion==="")
{
$suggestion=$p;
}else
{
	$suggestion .= ", $p";
}

}

}
}

echo $suggestion === "" ? "No Suggestion": $suggestion;

?>