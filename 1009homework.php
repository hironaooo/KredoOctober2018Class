<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- start of way1 -->
	<?php 
		if ( isset($_POST['submit'])) {
			$name = $_POST['name'];
			$timein_hour = $_POST['timein_hour'];
			$timein_minutes = $_POST['timein_minutes'];
			$timeout_hour = $_POST['timeout_hour'];
			$timeout_minutes = $_POST['timeout_minutes'];
			echo "Expacted Output";
			echo "<br><br>";
			echo "Basic pay is P500 per Hour.<br>Employee is expected to work 8 hours per day.";
			echo "<br>";
			echo "1. {$name}";
			echo "<br>";
			if ($timein_minutes > $timeout_minutes) {
				$worktime_hour = $timeout_hour - $timein_hour -1;
				$worktime_minutes = 60 - $timein_minutes + $timeout_minutes;
				$worktime = $worktime_hour * 60 + $worktime_minutes;
					if ($worktime < 480 ) {
						$undertime = 480 - $worktime;
						$salary_undertime = 4000 - $undertime * 5;
						echo "2. Salary Per day : {$salary_undertime} P";
						echo "<br>";
						echo "3. Undertime : {$undertime} minutes";
					}else{
						$overtime = $worktime - 480;				
						$salary_overtime = 4000 + ($worktime_hour - 8) * 100;
						echo "2. Salary Per day : {$salary_overtime} P";
						echo "<br>";
						echo "3. Overtime : {$overtime} minutes";
					}
			}elseif ($timein_minutes <= $timeout_minutes) {
				$worktime_hour = $timeout_hour - $timein_hour;
				$worktime_minutes = $timeout_minutes - $timein_minutes;
				$worktime = $worktime_hour * 60 + $worktime_minutes;
					if ($worktime < 480 ) {
						$undertime = 480 - $worktime;
						$salary_undertime = 4000 - $undertime * 5;
						echo "2. Salary Per day : {$salary_undertime} P";
						echo "<br>";
						echo "3. Undertime : {$undertime} minutes";
					}else{
						$overtime = $worktime - 480;				
						$salary_overtime = 4000 + ($worktime_hour - 8) * 100;
						echo "2. Salary Per day : {$salary_overtime} P";
						echo "<br>";
						echo "3. Overtime : {$overtime} minutes";
					}
			}
		}
	?>
	<!-- end of way1 -->
	<!-- start of way2 uncomplite-->
	<!-- <?php 
		// $name = $_POST['name'];
		// $timein_hour = $_POST['timein_hour'];
		// $timein_minutes = $_POST['timein_minutes'];
		// $timeout_hour = $_POST['timeout_hour'];
		// $timeout_minutes = $_POST['timeout_minutes'];
		// $worktime = ($timeout_hour * 60 + $timeout_minutes) - ($timein_hour * 60 + $timein_minutes);
		// echo "Expacted Output";
		// echo "Basic pay is P500 per Hour. Employee is expected to work 8 hours per day.";
		// echo "<br>";
		// echo "1. {$name}";
			// if ($worktime < 480 ) {
			// 	$undertime = 480 - $worktime;
			// 	$salary = 480 - $undertime * 5;
			// 	echo "2. Salary Per day : {$salary}";
			// 	echo "3. Undertime : {$undertime}";
			// }else{
			// 	$overtime = $worktime - 480;				
			// 	$salary = 480 + ($worktime_hour - 8) * 100;
			// 	echo "2. Salary Per day : {$salary}";
			// 	echo "3. Overtime : {$overtime}";
			// }
	?> -->
	<!-- end of way2 -->
	<!-- start of html -->
	<br><br><hr>
	<p>Employees Log</p>
	<br>
	<form action="" method="POST">
		<label for="name">Name : </label>
		<input type="text" name="name">
		<br>
		<br>
		<label for="age">Time In : </label>
		<input type="number" name="timein_hour"> Hour
		<input type="number" name="timein_minutes"> Minutes
		<br>
		<br>
		<label for="age">Time Out : </label>
		<input type="number" name="timeout_hour"> Hour
		<input type="number" name="timeout_minutes"> Minutes
		<br><br>
		<input class="submit" type="submit" value="SUBMIT" name="submit">
	</form>
	<!-- end of html -->
</body>
</html>