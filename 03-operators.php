<?php

$num1 = 12;
$num2 = 15;

$sum  = $num1 + $num2;
$diff = $num2 - $num1;
$prod = $num1 * $num2;
$quo  = $num2  / $num1;
$mod  = 5 % 3; 				//result: 2

echo "The sum is $sum";
echo "<br>";
echo "The difference is $diff";
echo "<hr>";

/* Assignment Operator */

$x = 0;
$x += 4;
$x = 15;
$x += 5;  // $x = $x + 5

echo $x;
echo "<hr>";
/* Comparison */

$x = 2;
$y = "2";

var_dump($x==$y); //true
echo "<br>";
var_dump($x===$y); //false
echo "<br>";
var_dump($x != $y); //false
echo "<br>";
var_dump($x !== $y); //true
echo "<br>";
var_dump($x > $y); //false
echo "<br>";
var_dump($x <  $y); //false
echo "<br>";
var_dump($x <=  $y); //true
echo "<hr>";
/* Increment / Decrement */

$x = 4;
$y = 5;

$x++; //post-increment
echo $x;
echo "<br>";
echo ++$y; //pre-increment
echo "<hr>";

/* Logical Operator */

$x = 2;
$y = 3;

var_dump(3 > 4 > 5); //error

var_dump( (true) And (true)); //true
echo "<br>";
var_dump( (true) And (false)); //false
echo "<br>";
var_dump((4 > 3) And (4 == 4));//true
echo "<br>";
var_dump( (5 > 3) || (6 < 2));//true
echo "<br>";
var_dump((3 > 4) And (5==5)); //false
echo "<br>";
var_dump( (4 > 2) xor (6 < 10));//
echo "<hr>";

/* Concatenation */

$x = 34;

echo "The value is " . $x;

$x = 35;

echo "The next value is " .  $x; //












