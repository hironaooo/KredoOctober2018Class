<?php 
require_once 'connect.php';

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Registration</title>
 	<link rel="stylesheet" href="">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 </head>
 <body>
 	<?php 
 	// ホストがパスワードを見れなくする方法　sha1, md5, hash(これが最新でsam推奨)など...
 	$pass = "text";
 	echo "Sha1 : " . sha1($pass) . "<br>";
 	echo "Md5 : " . md5($pass) . "<br>";
 	echo "Hash : " . password_hash($pass, PASSWORD_DEFAULT) . "<br>"; //samのおすすめ　DEFAULTの部分をBECRYPTと書いてもいい
 	if ( isset($_POST['register'])) {
		if ( ! empty($_POST['username']) && ! empty($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$confpass = $_POST['confirmpass'];
			$sql = "SELECT id FROM userstbl WHERE username='$username'";
			$query = mysqli_query($conn, $sql);
			if ( $confpass != $password) {
				echo "Password and Confirm password do not match";
			}elseif( mysqli_num_rows($query) > 0){ //rowの数が１ならOK、それ以上は作れないという意味
				echo "The username is already existing. Please choose another username.";
			}elseif( strlen($password) < 5){
				echo "Check the length of password, Password should be at least 5 characters.";
			}else{
				$hash = password_hash($password, PASSWORD_DEFAULT); 
				$date = date('Y-m-d'); //現在の日付 : Year-month-day
				$sql = "INSERT INTO userstbl(username, password, registered_date) 
						VALUES('$username', '$hash', '$date')"; //hashを使うのならこの部分も$password -> $hashにするのを忘れない
				$query = mysqli_query($conn,$sql);
				if ($query === true) {
					header("Location: login.php");
				}else{
					echo "Unable to register";
				}
			}
		}else{
			echo "<div class='alert alert-danger'>
						Please type your username</div>";
		}
	}
    ?>
 	<form action="" method="POST">
 		<label for="username">Username</label><br>
 		<input type="text" name="username"><br><br>
 		<label for="pass">Password</label><br>
 		<input type="password" name="password"><br><br>
 		<label for="confpass">Confirm password</label><br>
 		<input type="password" name="confirmpass"><br><br>

 		<input type="submit" name="register" value="Resister">
 	</form>
 </body>
 </html>