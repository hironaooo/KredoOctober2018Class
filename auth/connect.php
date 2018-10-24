<?php 

	session_start();
	
	$hostname = 'localhost'; 
	$username = 'root';
	$password = ''; 
	$dbname   = 'schooldb';

	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	
	if (! $conn) {
		exit('Connection failed' .mysqli_connect_error());
	}

 ?>