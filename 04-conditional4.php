<?php 
// 奇数偶数
$num = 10;
if ($num % 2 == 0) {
	echo "Even";
}elseif ($num % 2 !== 0) {
	echo "Odd";
}

// 下のも同じ
$num = 10;
if ($num % 2 == 0) {
	echo "Even";
}else {
	echo "Odd";
}

 ?>