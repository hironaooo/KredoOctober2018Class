<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
	<style>
		.box{
			border:1px solid;
			text-align:;
			display: inline-block;
			float:left;
		}
		.outPut{
			margin:0px;
		}
	</style>
<body>
	<div class="container">
		<form action="" method="POST">
		 	<label for="name">Enter a number </label><br>
		 	<input type="number" name="number">
		 	<input class="submit" type="submit" value="SUBMIT" name="submit">
		</form>
	<br>

	<?php 
		if ( isset($_POST['submit'])) {
			$number = $_POST['number'];
			$ctr = 2;
			$ctr2 = 1;
			echo "<div class='box'>";
			echo "<p class='outPut'>Output</p>";
			while ($ctr <= $number) {
				$ctr2 .= " - {$ctr}";
				$ctr++;
			}
			echo "{$ctr2}";
			echo "</div>";
		}
	?>
	</div>
</body>
</html>