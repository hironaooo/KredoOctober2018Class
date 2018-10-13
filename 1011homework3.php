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
		<br>
		<form action="" method='POST'>
			<label for="name">Enter a number </label><br>
		 	<input type="number" name="number">
		 	<input class="submit" type="submit" value="SUBMIT" name="submit"><hr>
			<?php 
			if ( isset($_POST['submit'])){
				$input = $_POST['number'];
				echo "<select name='selectForm'>";
				echo "<option value=''> -Select- </option>";
				$ctr = 1;
				while ($ctr <= $input) {
					echo "<option value='{$ctr}'>{$ctr}</option>";
					$ctr++;
				}
				echo "</select>";
				echo "</form>";
			}
			?>
</body>
</html>