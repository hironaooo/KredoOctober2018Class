<?php 

require_once 'connect.php';

if ( ! isset($_SESSION['id'])) {
	header("Location: login.php");
	exit;
}


echo $_SESSION['user'];

echo $_SESSION['id'];

$sql = "SELECT * FROM studentstbl"; //get all students
$query = mysqli_query($conn, $sql); //execute the query

require_once 'header.php';

echo "<table class='table table-striped'>";
echo "<tr><th>ID</th><th>Firstname</th><th>Contact</th><th>Age</th><th>Delete</th><th>Edit</th></tr>";
while($row = mysqli_fetch_array($query))
{
	$id = $row['id'];
	echo "<tr>";
	echo "<td>" . 	$id  . "</td>"; 
	echo "<td>" . $row['firstname'] . "</td>"; 
	echo "<td>" . $row['contact'] . "</td>";
	echo "<td>" . $row['age'] . "</td>";

	?>
	<td>
		<form action="delete.php" method="POST">
		<input type="hidden" name="hid_id" value="<?php echo $id; ?>">
		<input type="submit" name="delete" value="Delete">
		</form>
	</td>
	<?php
	echo "<td><a href = 'edit.php?id=$id'>Edit</a></td>";
	echo "</tr>";
}
echo "</table>";
?>
 <a href="logout.php">Logout</a>
</div>
</body>
</html>