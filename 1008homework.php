<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Basic form</title>
	<link rel="stylesheet" href="">
	<style>
		.add-btn{
			margin-left: 160px;
		}

	</style>
</head>
<body>
	<form action="1008homework-display.php" method="POST">
		<label for="number">First Number</label>
		<input type="number" name="firstnumber"><br>
		<label for="number">Second Number</label>
		<input type="number" name="secondnumber">
		<br>
		<input class="add-btn" type="submit" value="add" name="add">
		<input class="substract-btn" type="submit" value="substract" name="substract">
	</form>
</body>
</html>