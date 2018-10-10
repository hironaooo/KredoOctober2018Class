<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style>
		.submit{
			margin-left: 30px;
		}
	</style>
</head>
<body>
	<!-- start of php -->
	<?php 
	if ( isset($_POST['submit'])) {
		echo "Your name : {$_POST['name']}";
		echo "<br>";
		echo "Age : {$_POST['age']}";
		echo "<br>";
		echo "Product selected : {$_POST['product']}";
		echo "<br>";
		echo "Quantity : {$_POST['quantity']}";
		echo "<br>";
		if (isset($_POST['onsale'])) {
			if ($_POST['product'] == "tshirt") {
				$paidamount = 500 * $_POST['quantity'] * 0.8;
				echo "Amount to be paid : {$paidamount}";
			}elseif($_POST['product'] == "longspants"){
				$paidamount = 700 * $_POST['quantity'] * 0.9;
				echo "Amount to be paid : {$paidamount}";
			}elseif($_POST['product'] == "hoody"){
				$paidamount = 900 * $_POST['quantity'] * 0.95;
				echo "Amount to be paid : {$paidamount}";
			}else{
				echo "please select product";
			}
		}else{
			if ($_POST['product'] == "tshirt") {
				$paidamount = 500 * $_POST['quantity'];
				echo "Amount to be paid : {$paidamount}";
			}elseif($_POST['product'] == "longspants"){
				$paidamount = 700 * $_POST['quantity'];
				echo "Amount to be paid : {$paidamount}";
			}elseif($_POST['product'] == "hoody"){
				$paidamount = 900 * $_POST['quantity'];
				echo "Amount to be paid : {$paidamount}";
			}else{
				echo "please select product";
			}
		}
	
		echo "<br>";
		if ($_POST['age'] >=60 ) {
			$paidamount *= 0.88;
			echo "Age is 60 above, so you can get 12% discount also. <br>Therefore the total amount is : {$paidamount}";
		}
	}
	?>
	<!-- end of php -->
	<!-- start of html -->
	<br><br><hr>
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-6">
				<p>Customer Information</p>
				<br>
				<form action="" method="POST">
				<label for="name">Name : </label>
				<input type="text" name="name">
				<br>
				<br>
				<label for="age">Age : </label>
				<input type="number" name="age">
				<br>
				<br>
			</div>
			<div class="col-md-6">
				<label for="product">Product : </label>
				<select name="product">
					<option value=""> -Select- </option>
					<option value="tshirt">T-SHIRT</option>
					<option value="longspants">Longs Pants</option>
					<option value="hoody">Hoody</option>
				</select>
				<br>
				<br>
				<label for="quantity">Quantity : </label>
				<input type="number" name="quantity">
				<br><br>
				<input type="checkbox" name="onsale" value="On Sale?">On Sale?<br>
				<p>If Age is 60 above, 12% discount also.</p>
			</div>
		</div>
		<div class="col-md-6">
		</div>
	</div>
		<input class="submit" type="submit" value="SUBMIT" name="submit">
	</form>
	<!-- end of html -->
</body>
</html>