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
					for ($i=1; $i <= 5; $i++) { 
						echo "<td> </td>";
					}
					echo "</tr>";
					$ctr++;
				}
				echo "</table>";
				}
			
		 ?>
	</div>
</body>
</html>