<?php 
	// 配列から文字列
	$array = ["Sam" , "John"];
	echo $string; //error
	echo implode(",", $array); //array to string
	// output : Sam,JOhn

	// 文字列から配列
	$str = "Hello World"; //Hello
	echo $str; //Hello World
	$array = explode ("",$str); //string to Array
	echo $array[0]; //Hello
	echo $array[1]; //world
 ?>