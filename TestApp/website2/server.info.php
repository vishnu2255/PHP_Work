<?php
# server info super globals
//create server array

$server = [
'Host Server Name' => $_SERVER['SERVER_NAME'],
'Host Header' => $_SERVER['HTTP_HOST'],
'Server Software' => $_SERVER['SERVER_SOFTWARE'],
 'Document Root' => $_SERVER['DOCUMENT_ROOT'],
 'CURRENT PAGE' => $_SERVER['PHP_SELF'],
 'SCRIPT NAME'  => $_SERVER['SCRIPT_NAME'],
 'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
];

// echo $server['Host Server Name'];

// ECHO '<BR>';

// var_dump($server);
// ECHO '<BR>';

// print_r($server);

// ECHO '<BR>';

//create client array

$client = [
'client system info'=> $_SERVER['HTTP_USER_AGENT'],
'client IP' => $_SERVER['REMOTE_ADDR']
];

//printf($client);
// print_r($client);

?>