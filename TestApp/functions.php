<?php

/*
Camel Case = myFunction();
Lower Case = my_function();
Pascal Case= MyFunction();
*/

function simpleFunction()
{
	echo 'Hello';
}

simpleFunction();

function sayHello($name = 'world')
{
echo "hello , $name";
}

// sayHello();

function returnex($num1,$num2)
{
return $num1*$num2;
}

echo '<br>';
echo returnex(1,10);
echo '<br>';


$myNum = 10;

function test($n)
{
 $n+=10;
}

function test2(&$n)
{
$n+=10;
}

echo "$myNum <br>";
test($myNum);

//echo "test($myNum)";

echo "$myNum <br>";

test2($myNum);

echo "$myNum <br>";

?>