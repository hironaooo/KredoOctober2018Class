<?php 
	echo "Odd : ";
	for ($i=1; $i <= 10; $i++) { 
		if ($i % 2 !== 0) {
			echo "{$i} ";
		}
	}
	echo "<br>";
	echo "Even : ";
	for ($i=1; $i <= 10; $i++) { 
		if ($i % 2 == 0) {
			echo "{$i} ";
		}
	}
	

 ?>