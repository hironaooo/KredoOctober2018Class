<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<!-- totalamount(different/row)とseatnumber -->
	<div class="container">
		<?php 
			if ( isset($_POST['submit'])) {
				if( isset($_POST['seats'])){
					print_r($seats);
						$seats = $_POST['seats'];
						$seatNumber = "";
						$sum = 0;
						foreach ($seats as $number => $price){
							$seatNumber .= "{$number},";
							$sum += $price;
							
						}
						echo "You selected seat numbers : {$seatNumber}";
						echo "<br>";
						echo "The total amount to be paid is : {$sum}";
				}
			}
		 ?>
		<hr>
	 	<form action="" method="POST">
	 		<h5>Enter Total Seats : 10</h5><br>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[1]" value="300"> 1
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[2]" value="300"> 2
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[3]" value="300"> 3
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[4]" value="200"> 4
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[5]" value="200"> 5
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[6]" value="200"> 6
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[7]" value="100"> 7
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[8]" value="100"> 8
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[9]" value="100"> 9
	 			</div>
	 		</div>
	 		<br>
			<input type="submit" name="submit" value="Submit">
		</form>			
	 </div>
</body>
</html>