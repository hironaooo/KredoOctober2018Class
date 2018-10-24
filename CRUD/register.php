<?php 
require_once 'connect.php';

// ホストがパスワードを見れなくする方法　sha1, md5, hash(これが最新でsam推奨)など...
$pass = "text";
// echo "Sha1 : " . sha1($pass) . "<br>";
// echo "Md5 : " . md5($pass) . "<br>";
// echo "Hash : " . password_hash($pass, PASSWORD_DEFAULT) . "<br>"; //samのおすすめ　DEFAULTの部分をBECRYPTと書いてもいい
password_hash($pass, PASSWORD_DEFAULT);
if ( isset($_POST['register'])) {
	if ( ! empty($_POST['firstname']) && ! empty($_POST['contact']) && ! empty($_POST['address']) && ! empty($_POST['age']) && ! empty($_POST['password'])){
		$firstname = $_POST['firstname'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$password = $_POST['password'];
		$confpass = $_POST['confirmpass'];
		$sql = "SELECT id FROM studentstbl WHERE firstname='$firstname'";
		$query = mysqli_query($conn, $sql);
		if ( $confpass != $password) {
			echo "Password and Confirm password do not match";
		}elseif( mysqli_num_rows($query) > 0){ //rowの数が１ならOK、それ以上は作れないという意味
			echo "The firstname is already existing. Please choose another firstname.";
		}elseif( strlen($password) < 5){
			echo "Check the length of password, Password should be at least 5 characters.";
		}else{
			$hash = password_hash($password, PASSWORD_DEFAULT); 
			$sql = "INSERT INTO studentstbl(firstname, contact, address, age, password) 
					VALUES('$firstname', '$contact', '$address', '$age', '$hash')"; 
			$query = mysqli_query($conn,$sql);
			if ($query === true) {
				header("Location: login.php");  //これの上にHTMLがあってはいけない
			}else{
				echo "Unable to register";
			}
		}
	}else{
		echo "<div class='alert alert-danger'>
					Please type your firstname</div>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="register.css">
<!-- //web font -->
</head>
<body>
	<!--
	Author: Colorlib
	Author URL: https://colorlib.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
	-->
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Registration Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="POST">
					<input class="text" type="text" name="firstname" placeholder="Firstname" required=""><br>
					<input class="text" type="number" name="age" placeholder="Age" required=""><br>
					<input class="text" type="text" name="contact" placeholder="Contact number" required="">
					<input class="text email" type="text" name="address" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="confirmpass" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="Register" name="register">
				</form>
				<p>If you already have your account, <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>




	<!-- <div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4 border">
			 	<form action="" method="POST">
			 		<div class="col-md-6">
				 		<label for="firstname">Firstname</label><br>
				 		<input type="text" name="firstname"><br><br>
				 	</div>
				 	<div class="col-md-6">
				 		<label for="age">Age</label><br>
				 		<input type="number" name="age"><br><br>
				 	</div>
				 	<div class="col-md-6">
				 		<label for="contact">Contact</label><br>
				 		<input type="text" name="contact"><br><br>
				 	</div>
				 	<div class="col-md-6">
				 		<label for="address">Address</label><br>
				 		<input type="text" name="address"><br><br>
				 	</div>
				 	<div class="col-md-6">
				 		<label for="pass">Password</label><br>
				 		<input type="password" name="password"><br><br>
				 	</div>
				 	<div class="col-md-6">
				 		<label for="confpass">Confirm password</label><br>
				 		<input type="password" name="confirmpass"><br><br>
					</div>
					<div class="col-md-12 text-center">
				 		<input type="submit" name="register" value="Resister">
				 	</div>
			 	</form>
			</div>
			<div class="col-md-4">
			</div>
	 	</div>
	