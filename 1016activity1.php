<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<!-- student name & grade activity rowいらなかったかも-->
	<div class="container">
		<form action="" method="POST">
		 	<label for="name">Enter a number of Students</label><br>
		 	<input type="number" name="studentsNumber">
		 	<input class="submit" type="submit" value="SUBMIT" name="submit">
		</form>
		<hr>
		<?php 
			// 生徒数を決定してインプットの数決めた後
			if ( isset($_POST['submit'])) {
				$studentsNumber = $_POST['studentsNumber'];
				echo "<form action='' method='POST'>";
				echo "<div class='row'>";
					echo "<div class='col-md-6'>";
						echo "<div class='row'>";
							echo "<div class='col-md-4'>";
								echo "<label for='text'>Student Name</label><br>";
								$ctr = 1;
								while ($ctr <= $studentsNumber) {
									echo "<input type='text' name='names[]'>";
									$ctr++;
								}
							echo "</div>";
							echo "<div class='col-md-4'>";
								echo "<label for='number'>Grade</label><br>";
								$ctr = 1;
								while ($ctr <= $studentsNumber) {
									echo "<input type='number' name='numbers[]'>";
									$ctr++;
								}
							echo "</div>";
						echo "</div>";
					echo "</div>";
					echo "<div class='col-md-6'>";
					echo "</div>";
				echo "</div>";
				echo "<br>";
				echo "<input class='submit2' type='submit' value='SUBMIT' name='submit2'>";
				echo "</form>";
				echo "<br>";
			}
			// 生徒数と成績を入力した後
			if ( isset($_POST['submit2'])) {
				echo "<h3>Output</h3>";
				$names = $_POST['names'];
				$numbers = $_POST['numbers'];
				$count = count($names);
				$ctr = 0;
				echo "<div class='row'>";
					echo "<div class='col-md-6'>";
						echo "<table class = 'table table-bordered'>";
								echo "<tr>";
									echo "<td>Student Name</td>";
									echo "<td>Grade</td>";
								echo "</tr>";
							while ($ctr < $count) {
								echo "<tr>";
									echo "<td>{$names[$ctr]}</td>";
									echo "<td>{$numbers[$ctr]}</td>";
								echo "</tr>";
							$ctr++;
							}
						echo "</table>";
					echo "</div>";
					echo "<div class='col-md-6'>";
					echo "</div>";
				echo "</div>";
				// 最大値・最小値について
				$max = $numbers[0]; 
				for ($i=1;$i<count($numbers);$i++){
				  if($max<$numbers[$i]){
				     $max=$numbers[$i];
				  }
				}
				echo "The highest Grade is " .$max; 
				echo "<br>";
				$min = $numbers[0];
				for ($i=1;$i<count($numbers);$i++){
				  if($min>$numbers[$i]){
				     $min=$numbers[$i];
				  }
				}
				echo "The lowest Grade is " .$min; 		
			}		
		?>
	</div>
</body>
</html>