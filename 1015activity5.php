<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<!-- 文字列から配列、配列から文字列の練習 number,number -->
	<div class="container"><br>
		<form action="" method="POST">
		 	<label for="name">Enter a number </label><br>
		 	<input type="number" name="number">
		 	<input class="submit" type="submit" value="SUBMIT" name="submit">
		</form><br>
			<?php 
			if ( isset($_POST['submit'])) {
				$number = $_POST['number'];
				if ($number == 0) {
					echo $number;
				}else{
					$ctr = 2;
					$printNumber = 1;
					while ($ctr <= $number) {
						$printNumber .= " {$ctr}";
						$ctr++;
					}
					$array = explode(" ", $printNumber);
					echo implode(",", $array);
				}
			}
		?>	
		<!-- teachers code
		<?php  ?> -->
	</div>
</body>
</html>

