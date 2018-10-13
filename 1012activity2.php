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
	if ( isset($_POST['submit'])) {
		if( isset($_POST['course'])){
			$course = $_POST['course'];
			foreach ($course as $c) {
				echo $c . "<br>";
			}
		}
	}

	 ?>
	<form action="" method="POST">
		<label for="name">Your name</label>
		<input type="text" name="name"><br>
		<label>Courses</label><br>
		<input type="checkbox" name="course[]" value="01">PHP<br>
		<input type="checkbox" name="course[]" value="02">Photoshop<br>
		<input type="checkbox" name="course[]" value="03">Illustrator<br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>