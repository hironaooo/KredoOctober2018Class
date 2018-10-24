	<?php  

	require_once 'connect.php';
	require_once 'header_teachers.php';

	$id = isset($_GET['id'])?(int)$_GET['id']:0;
	

	if ( isset($_POST['update'])) {
		$firstname = $_POST['firstname'];
		$age       = $_POST['age'];
		$contact   = $_POST['contact'];
		$address   = $_POST['address'];
		$sql = "UPDATE teacherstbl SET firstname='$firstname', age='$age', contact='$contact', address='$address'
				WHERE id = $id";

		$query = mysqli_query($conn, $sql); //execute query 実行する
		// echo $query; //successful なら 1 を返す
		if ($query) {
			echo "successfully updated";
		}else{
			echo "There is something wrong";
		} 
	}

	$sql = "SELECT * FROM teacherstbl WHERE id = {$id}"; 
	$query = mysqli_query($conn, $sql); 
	$row = mysqli_fetch_array($query);
	?>
	<form action="" method = "POST">
		<label>Firstname</label>
		<input type="text" name = "firstname" value = "<?php echo $row['firstname'];?>"><br>
		<label>Age</label>
		<input type="text" name = "age" value = "<?php echo $row['age'];?>"><br>
		<label>Contact</label>
		<input type="text" name = "contact" value = "<?php echo $row['contact'];?>"><br>
		<label>Address</label>
		<input type="text" name = "address" value = "<?php echo $row['address'];?>"><br><br>
		<input type="submit" name = "update" value = "UPDATE">
	</form>
	</body>
	</html>