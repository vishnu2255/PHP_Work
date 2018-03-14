<?php

//conditionals

/*
== value
=== value and data type
<
>
<=
>=
!=
!==

*/
$n = '8';

if($n===5)
{
echo ' pass ';
}
else
{
	echo 'fail';
}

switch ($n) {
	case '1':
		echo $n;
		
	
	default:
		echo $n;

		case '2':
		echo '2';
		break;
}


?>