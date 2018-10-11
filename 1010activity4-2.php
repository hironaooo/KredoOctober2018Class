<?php 

	$odd = " ";
	$even = " ";

	$ctr = 1;
	while ($ctr <= 10) {
		if ($ctr%2==0) {
			$even .= $ctr . " ";
		}else{
			$odd .= $ctr . " ";
		}
		$ctr++;
	}
	echo "Odd : {$odd} <br>";
	echo "Even : {$even}";
 ?>