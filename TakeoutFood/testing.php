<?php
session_start();

$_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');

?>