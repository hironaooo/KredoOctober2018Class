<?php 

session_start();

echo "Before session destroy";
print_r( $_SESSION);

session_destroy();

echo "After session destroy";
print_r( $_SESSION);
 ?>