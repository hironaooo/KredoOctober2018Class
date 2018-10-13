<?php 

	$name1 = ["Sam", "Hironao", "Mike"];
	$name2 = array("Sam", "Hironao", "Mike");
	echo "My name is " .$name1[1];
	echo "<hr>";
	print_r($name1);

	echo $name; //error

	echo "<hr>";
	$data = [
		"city"	=>	"Cebu",
		"country"	=>	"Philippins",
		"cource"	=>	"BS Computer Science"
	];

	echo "My sity is : ". $data["city"];
	echo "<hr>";
	$series = ["Hironao", 12 => "John", 45 => "Micheal", 10 => "Sam", "Jordan", "Mike"];
	echo $series[12];
	echo "<br>";
	echo count($series);

	echo "<hr>";
	foreach ($series as $key => $value){
		echo "Index is : " . $key . "and Value : " . $value. "<br>";
	}

	echo "<hr>";
	foreach ($series as $value){
		echo "Name : " .$value. "<br>";
	}

 ?>












