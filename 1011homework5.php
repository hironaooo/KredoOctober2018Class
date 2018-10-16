<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<style>
	</style>
</head>
<body>
<div class="container">
	<form action="" method="POST">
	 	<label for="name">Enter a number </label><br>
	 	<input type="number" name="number">
	 	<input class="submit" type="submit" value="SUBMIT" name="submit">
	</form>
	<br>
	<p>Output</p>
	<?php 
		if ( isset($_POST['submit'])) {
			$number = $_POST['number'];
			$cols = 4;
			$ctr = 1;
			$colmd = 12/$cols;
			echo "<div class='row'>";
			while ($ctr <= $number) {
				echo "<div class='col-md-{$colmd}'><div class='eachNumber'>{$ctr}</div></div>";
				if ($ctr%$cols==0) {
					echo "</div><br><div class='row'>";
				}
				$ctr++;
			}
			echo "</div>";
		}
	?>
</div>
</body>
</html>