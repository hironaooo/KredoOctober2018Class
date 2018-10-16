<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		if (isset ($_POST['booknow'])) {
			if (isset($_POST['seat'])) {
				$amount = 0;
				$seats = [];
				foreach ($_POST['seat'] as $number => $price) {
					$amount = $amount + $price;
					array_push($seats, $number); //seats[$ctr] = $number;

					
				}
			}
		}
	 ?>
</body>
</html>