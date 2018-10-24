<?php 
require_once 'connect.php';

require_once 'header.php';

if( isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$contact   = $_POST['contact'];
	$age       = $_POST['age'];
	$sql = "INSERT INTO studentstbl(firstname, contact, age)
			VALUES('$firstname', '$contact', '$age')";
	$query = mysqli_query($conn, $sql); //execute query
	if( $query ){
		echo "Succesfully inserted data";
	}else{
		echo "Error While inserting";
	}
}
?>
	<form action="" method="POST">	
		<label>	Firstname</label>
		<input type="text" name="firstname"><br>
		<label>	Contact</label>
		<input type="text" name="contact"><br>
		<label>	Age</label>
		<input type="text" name="age"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>