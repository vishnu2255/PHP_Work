<?php

$host = '127.0.0.1';
$db = 'takeoutfood';
$user = 'root';
$pass = 'vishnu10';
$dsn = "$dbms:host=$host;dbname=$db";

try
{
$cn = new PDO($dsn, $user, $pass);	
echo 'connected to db';
}
catch(PDOException $em)
{
die('could not connect ' . $em->getmessage());
}


$q=$cn->exec('call SP_GETCATEGORIES()');

$res=$cn->query('select @out')->fetchAll();
print_r($res);

?>