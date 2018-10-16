<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<!-- totalamount(100P/each)とseatnumber -->
	<div class="container">
		<?php 
			if ( isset($_POST['submit'])) {
				if( isset($_POST['seats'])){
						$seats = $_POST['seats'];
						$number = count($seats);
						$seatNumber = $seats[0];
						$price = 100 * $number;
						for ($i=1; $i < $number; $i++) { 
							$seatNumber .= ",$seats[$i]"; 
						}		
						echo "You selected seat numbers ".$seatNumber;
						echo "<br>";
						echo "The total Amount to be paid is : ".$price;
				}
			}
		 ?>
		<hr>
	 	<form action="" method="POST">
	 		<h5>SEAT Reservation</h5><br>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="1"> 1
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="2"> 2
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="3"> 3
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="4"> 4
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="5"> 5
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="6"> 6
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="7"> 7
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="8"> 8
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="9"> 9
	 			</div>
	 		</div>
	 		<br>
			<input type="submit" name="submit" value="Submit">
		</form>			
	 </div>
</body>
</html>