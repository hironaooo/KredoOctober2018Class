<?php 

session_start();
$name = "Michael";

$_SESSION['name'] = "Sam";
$_SESSION['id'] = 12;

print_r( $_SESSION);

 ?>