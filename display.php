<?php 

if (isset($_POST['submit'])) {
	echo "Your name is" . $_POST['myname'];
	echo "<br>";
	echo "Your age is :" . $_POST['age'];
}else{
	echo "Please submit the form first";
}
?>