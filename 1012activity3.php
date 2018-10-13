<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<?php 
		if ( isset($_POST["submit"])) {
			if ( isset($_POST["hotel"])) {
				$hotelPrice = $_POST["hotel"];
				echo "Hotel Price is : ".$hotelPrice."<br>";
				if( isset($_POST['services'])){
					$services = $_POST['services'];
					$sum = $hotelPrice;
					foreach ($services as $service) {
							$sum = $sum + $service;
					}
					echo "The Total amount to be paid is : " .$sum;
				}
			}
		}
		?>
		<h3>Hotel Reservation</h3><br><br>
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-4">
					<input type="radio" name="hotel" value="5000">&nbsp; Standard
				</div>
				<div class="col-md-4">
					<input type="radio" name="hotel" value="10000">&nbsp; Deluxe 
				</div>
				<div class="col-md-4">
					<input type="radio" name="hotel" value="15000">&nbsp; Family <br><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<p>5,000 per day</p>
				</div>
				<div class="col-md-4">
					<p>10,000 per day</p>
				</div>
				<div class="col-md-4">
					<p>15,000 per day</p>
				</div>
			</div><br><br>
		<h3>Avail the Other Services</h3><br>
			<input type="checkbox" name="services[]" value="1000">Massage 1,000<br><br>
			<input type="checkbox" name="services[]" value="1500">Foot Spa 1,500<br><br>
			<input type="checkbox" name="services[]" value="500">Internet Connection 500<br><br>
			<input type="checkbox" name="services[]" value="800">Laundry & Ironing 800<br><br>
			<input type="submit" name="submit" value="Compute">
		</form>
	</div>

</body>
</html>