<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Basic form</title>
	<link rel="stylesheet" href="">
	<style>
		.submit{
			margin-left: 160px;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		<label for="number">First Number</label>
		<input type="number" name="firstnumber"><br>
		<label for="number">Second Number</label>
		<input type="number" name="secondnumber">
		<br>
		<input class="submit" type="submit" value="submit" name="submit">
	</form>

	<?php  
		if (isset($_POST['submit'])) {
			$firstNumber = $_POST['firstnumber'];
			$secondNumber = $_POST['secondnumber'];
			// 1. first number should be greater than secound number
			function caution1(){
				echo "First number should for the following.";
			}
			// 2. All fields must be required
			function caution2(){
				echo "All fields must be required.";
			}
			// 3. Compute the Sum of First and Secound number
			function displaySum(){
				global $firstNumber;
				global $secondNumber;
				$sum = $firstNumber + $secondNumber;
				echo "The sum is {$sum}";
			}
			echo "<hr>";
			
			if ($firstNumber == "" || $secondNumber == "") {
				caution2();
			}elseif ($firstNumber < $secondNumber) {
				caution1();
			}else{
				displaySum();
			}
		}
	 ?>
</body>
</html>
