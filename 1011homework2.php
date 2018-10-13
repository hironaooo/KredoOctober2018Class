<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style>
		.odd {
			background-color: green;
		}
		.even {
			background-color: yellow;
		}

	</style>
</head>
<body>
	<div class="container">
		<h1>Table</h1>
		<form action="" method="POST">
		 	<label for="name">Enter a number </label><br>
		 	<input type="number" name="number">
		 	<input class="submit" type="submit" value="SUBMIT" name="submit">
		</form>
		<br>
		<?php 
			if ( isset($_POST['submit'])){
				$input = $_POST['number'];
				$ctr = 1;
				echo "<table class = 'table table-bordered'>";
				while ($ctr <= $input) {
					echo "<tr>";
					if ($ctr % 2 == 0) {
						echo "<td class='text-center even'>{$ctr}</td>";
					}else{
						echo "<td class='text-center odd'>{$ctr}</td>";
					}	
					echo "</tr>";
					$ctr++;
				}
				echo "</table>";
			}
		?>
</body>
</html>