<?php 
// 成績
$grade = 90;
if($grade>=95 && $grade<=100){
	echo "A";
}elseif($grade>=90 && $grade<95){
	echo "B";
}elseif($grade>=85 && $grade<90){
	echo "C";
}elseif($grade>=80 && $grade<85){
	echo "D";
}elseif($grade>=75 && $grade<80){
	echo "E";
}elseif($grade<75){
	echo "Failed";
}

 ?>