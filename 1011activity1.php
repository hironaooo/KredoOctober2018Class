<?php 

	display();

	function display()
	{
		echo "Hello there";
	}
	echo "<br>";
	display();

	function compute()
	{
		echo 4 + 3;
	}
	echo "<br>";
	compute();
	echo "<br>";

	// 1 parameter
	function displayName($name)
	{
		echo "My Name is {$name}";
	}

	// 2 parameters
	function computeAge($name, $age = 30)
	{
		echo "Hello {$name}. Your age is {$age}";
	}

	// 引数
	displayName("Sam");
	echo "<br>";
	computeAge("samuel");
	echo "<br>";
	computeAge("Samuel", 40);
	echo "<br>";
	computeAge("Samuel");

	function getAge()
	{
		return 23;
	}

	function getNewAge()
	{
		return 40;
	}

	function dispalyNewAge()
	{
		return "40";
	}
	echo "<br>";
	echo getAge() + dispalyNewAge(); //4023 エコーを使った関数を読み込もうとすると右からになる。リターンでは左からちゃんと読み込む
	echo "<br>";
	echo getNewAge() + dispalyNewAge();

	// global, 引数の応用
	$age = 23;

	function displayAge2()
	{
		global $age;
		$x = 20;
		echo $x;
		echo "<br>";
		echo $age;
	}

	displayAge2();

	echo "<hr>";
	function compute2($x, $y)
	{
		$sum = $x + $y;
		return $sum;
	}

	echo "The sum is : " . compute2(20, 40);










 	?>



