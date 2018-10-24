<?php 

require_once 'connect.php';

$sql = "SELECT * FROM teacherstbl"; //get all students
$query = mysqli_query($conn, $sql); //execute the query

require_once 'header_teachers.php';

echo "<table class='table table-striped'>";
echo "<tr><th>ID</th><th>Firstname</th><th>Age</th><th>Contact</th><th>Address</th><th>Delete</th><th>Edit</th></tr>";
while($row = mysqli_fetch_array($query))
{
	$id = $row['id'];
	echo "<tr>";
	echo "<td>" . 	$id  . "</td>"; 
	echo "<td>" . $row['firstname'] . "</td>"; 
	echo "<td>" . $row['age'] . "</td>";
	echo "<td>" . $row['contact'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	?>
	<td>
		<form action="delete_teachers.php" method="POST">
		<input type="hidden" name="hid_id" value="<?php echo $id; ?>">
		<input type="submit" name="delete" value="Delete">
		</form>
	</td>
	<?php
	echo "<td><a href = 'edit_teachers.php?id=$id'>Edit</a></td>";
	echo "</tr>";
}
echo print_r($row);
echo "</table>";
?>
</div>
</body>
</html>