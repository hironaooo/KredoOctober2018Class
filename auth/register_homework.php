<?php 
require_once 'connect.php';

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Registration</title>
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<style>
		.divider-text {
		    position: relative;
		    text-align: center;
		    margin-top: 15px;
		    margin-bottom: 15px;
		}
		.divider-text span {
		    padding: 7px;
		    font-size: 12px;
		    position: relative;   
		    z-index: 2;
		}
		.divider-text:after {
		    content: "";
		    position: absolute;
		    width: 100%;
		    border-bottom: 1px solid #ddd;
		    top: 55%;
		    left: 0;
		    z-index: 1;
		}

		.btn-facebook {
		    background-color: #405D9D;
		    color: #fff;
		}
		.btn-twitter {
		    background-color: #42AEEC;
		    color: #fff;
		}
	</style>
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
			}elseif( mysqli_num_rows($query) > 0){ //$queryがtrueなら1だから、そうじゃなかったらという意味
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
					header("Location: login_homework.php");
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
	<div class="container">
	<hr>
	<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center">Create Account</h4>
		<p class="text-center">Get started with your free account</p>
		<p>
			<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
			<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
		</p>
		<p class="divider-text">
	        <span class="bg-light">OR</span>
	    </p>
		<form action="" method="POST">
			<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
				 </div>
		        <input class="form-control" placeholder="User name" type="text" name="username">
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				 </div>
		        <input class="form-control" placeholder="Email address" type="email" >
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
				</div>
				<select class="custom-select" style="max-width: 120px;">
				    <option selected="">+971</option>
				    <option value="1">+972</option>
				    <option value="2">+198</option>
				    <option value="3">+701</option>
				</select>
		    	<input name="" class="form-control" placeholder="Phone number" type="text">
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
				</div>
				<select class="form-control">
					<option selected=""> Select job type</option>
					<option>Designer</option>
					<option>Manager</option>
					<option>Accaunting</option>
				</select>
			</div> <!-- form-group end.// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
		        <input class="form-control" placeholder="Create password" type="password" name="password">
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
		        <input class="form-control" placeholder="Repeat password" type="password" name="confirmpass">
		    </div> <!-- form-group// -->                                      
		    <div class="form-group">
		        <button type="submit" class="btn btn-primary btn-block" name="register"> Register </button>
		    </div> <!-- form-group// -->      
		    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                         
		</form>
	</article>
	</div> <!-- card.// -->

	</div> 
	<!--container end.//-->

	<br><br>
	<article class="bg-secondary mb-3">  
	<div class="card-body text-center">
	    <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
	<p class="h5 text-white">Components and templates  <br> for Ecommerce, marketplace, booking websites 
	and product landing pages</p>   <br>
	<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com  
	 <i class="fa fa-window-restore "></i></a></p>
	</div>
	<br><br>
	</article>
 </body>
 </html>