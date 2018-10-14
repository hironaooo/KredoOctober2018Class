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
			if ( isset($_POST['submit'])) {
				if( isset($_POST['seats'])){
						$seats = $_POST['seats'];
						$sum = 0;
						foreach ($seats as $seat) {
								$sum = $sum + $seat;
						}
						echo "The Total amount to be paid is : " .$sum;
				}
			}
		 ?>
		<hr>
	 	<form action="" method="POST">
	 		<h5>Enter Total Seats : 10</h5><br>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 1
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 2
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 3
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 4
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 5
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 6
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 7
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 8
	 			</div>
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 9
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<input type="checkbox" name="seats[]" value="100"> 10
	 			</div>
	 		</div>
	 		<br>
			<input type="submit" name="submit" value="Submit">
		</form>			
	 </div>
</body>
</html>