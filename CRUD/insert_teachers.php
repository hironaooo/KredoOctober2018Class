<?php  

require_once 'connect.php';

require_once 'header_teachers.php';

if ( isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$age       = $_POST['age'];
	$contact   = $_POST['contact'];
	$address   = $_POST['address'];
	$sql = "INSERT INTO teacherstbl(firstname, age, contact, address)
			VALUES('$firstname', $age,'$contact', '$address')"; //int型なのかvarchar型なのかによって''をつけるかどうか考える必要あり

	$query = mysqli_query($conn, $sql); //execute query
	// echo $query; //successful なら 1 を返す
	if ($query) {
		echo "successfully inserted data";
	}else{
		echo "Error While inserting";
	}
}
?>
	<form action="" method = "POST">
		<label>Firstname</label>
		<input type="text" name = "firstname"><br>
		<label>Age</label>
		<input type="number" name = "age"><br>
		<label>Contact</label>
		<input type="number" name = "contact"><br>
		<label>Address</label>
		<input type="text" name = "address"><br><br>
		<input type="submit" name = "submit">
	</form>
</body>
</html>