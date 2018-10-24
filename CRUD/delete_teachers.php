<?php 

require_once 'connect.php';


//convert to integer
//$id = isset( $_GET['id']) ? (int) $_GET['id'] : 0;

if( isset($_POST['hid_id']))
{ 
	$id = $_POST['hid_id'];
	$sql = "DELETE FROM teacherstbl
			WHERE id=" . $id;

	mysqli_query($conn, $sql);
} 

//goes back to displaystudents.php
header("Location: displayteachers.php");

