<?php 
require_once 'connect.php';
// $userpass = 'japan';
// $tblpass = '';
// var_dump(password_verify($userpass, $tblpass));

if ( isset($_POST['username'])) {
	$user = mysqli_real_escape_string($conn,$_POST['username']); // sam' OR '1=1
	$pass = mysqli_real_escape_string($conn,$_POST['password']); //escape quotes example. sam'. -> sam\'

	$sql = "SELECT * FROM userstbl WHERE username='$user'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($query);

	if ( password_verify($pass, $row['password'])) {
		echo "Successfully loggedin"; //redirect to 
		$lastLogin = date("Y/m/d H:i:s");
		$sql = "UPDATE userstbl SET last_login='$lastLogin' WHERE username='$user'"; 
		$query = mysqli_query($conn,$sql);
		
		$_SESSION['id'] = $row['id'];
		$_SESSION['user'] = $row['username'];
		header('Location: homepage.php');

	}else{
		echo "Invalid username or password";
	}
}

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Login</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<h2>Login Form</h2>
 	<form action="" method="POST">
 		<label for="username">Username</label><br>
 		<input type="text" name="username"><br><br>
 		<label for="password">Password</label><br>
 		<input type="password" name="password"><br><br>
 		<input type="submit" name="login" value="Login">
 	</form>
 </body>
 </html>