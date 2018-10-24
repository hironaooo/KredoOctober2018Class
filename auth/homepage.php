<?php 

require_once 'connect.php';

if ( ! isset($_SESSION['id'])) {
	header("Location: login.php");
	exit;
}


echo $_SESSION['user'];

echo $_SESSION['id'];
 ?>

 <a href="logout.php">Logout</a>