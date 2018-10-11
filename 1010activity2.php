<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style>
		.border{
			border:solid 1px black;
			margin-left: 20px;
			padding:30px 50px;	
		}
	</style>
</head>
<body>
	 <form action="" method="POST">
	 	<label for="name">Enter a number : </label><br>
	 	<input type="number" name="number">
	 	<input class="submit" type="submit" value="SUBMIT" name="submit">
	 </form>
	 <br>
	 <p>Output</p><br>
	 <?php 
	 	$number = $_POST['number'];
		if ( isset($_POST['submit'])) {
			for ($i=1; $i <= $number; $i++) { 
				echo '<span class="border">'.$i.'</span>';
			}
		}
	 ?>
	 </div>
</body>
</html>