<?php 

if (isset($_POST['add'])) {
	$sum = $_POST['firstnumber'] + $_POST['secondnumber'];
	echo "The sum is $sum" ;
}elseif(isset($_POST['substract'])){
	$difference = $_POST['firstnumber'] - $_POST['secondnumber'];
	echo "The defference is $difference";
}

// 絶対値ver
// if (isset($_POST['add'])) {
// 	$sum = $_POST['firstnumber'] + $_POST['secondnumber'];
// 	echo "The sum is $sum" ;
// }elseif(isset($_POST['substract'])){
// 	$difference = $_POST['firstnumber'] - $_POST['secondnumber'];
// 	if ($difference >= 0) {
// 		echo "The defference is $difference";
// 	}elseif($difference < 0){
// 		$difference = -$difference;
// 		echo "The defference is $difference";
// 	}
// }

// Samteacher ver
// $fnum = $_POST['firstnumber'];
// $snum = $_POST['secondnumber'];

// if (isset($_POST['add'])) {
// 	echo "The sum is : " . ($fnum + $snum);
// }elseif (isset($_POST['subtract'])) {
// 	echo "The difference is :" . ($fnum - $snum);
// }
// 
?>