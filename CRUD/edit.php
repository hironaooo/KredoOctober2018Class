	<?php  

	require_once 'connect.php';

	$id = isset($_GET['id'])?(int)$_GET['id']:0;

	require_once 'header.php';

	if ( isset($_POST['update'])) {
		$firstname = $_POST['firstname'];
		$contact   = $_POST['contact'];
		$age       = $_POST['age'];
		$sql = "UPDATE studentstbl SET firstname='$firstname', contact='$contact', age='$age'
				WHERE id = $id";

		$query = mysqli_query($conn, $sql); //execute query 実行する
		// echo $query; //successful なら 1 を返す
		if ($query) {
			echo "successfully updated";
		}else{
			echo "There is something wrong";
		}
	}
	?>
	<form action="" method = "POST">
		<label>Firstname</label>
		<input type="text" name = "firstname"><br>
		<label>Contact</label>
		<input type="text" name = "contact"><br>
		<label>Age</label>
		<input type="text" name = "age"><br><br>
		<input type="submit" name = "update" value = "UPDATE">
	</form>
	</body>
	</html>