<?php 

echo "Your name is {$_POST['name']}";
echo "<br>";
if ($_POST['age']<18) {
	echo "You are still minor";
}else {
	echo "You are adult";
}
echo "<br>";
echo "Your address is {$_POST['address']}";
?>