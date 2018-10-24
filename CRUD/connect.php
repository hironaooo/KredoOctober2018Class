<?php 

	session_start();
	
	$hostname = 'localhost'; //サーバーネーム
	$username = 'root';
	$password = ''; //XAMPPのデフォルトはnoneになっている
	$dbname   = 'schooldb';

	//connect to mysql server
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	
	if (! $conn) {
		exit('Connection failed' .mysqli_connect_error());
	}
	// $sql = "INSERT INTO studentstbl(firstname, conatact, address, age)
	// 		VALUES('Micheal Jordan', '493840','Jamaica',60)";

	// $query = mysqli_query($conn, $sql);

	// echo $query;


 ?>