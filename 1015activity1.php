<?php 
	// 最後の要素を常に取り出す
	$array = [];
	$array = array();

	$array = [1, "sam", "phils", "cebu"];
	$total = count($array);
	echo $array[$total - 1];
	echo $array[count($array)-1];
 ?>