<?php 

	require_once 'connect.php';
	$sql = "SELECT * FROM studentstbl";
	$query = mysqli_query($conn, $sql);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 </head>
 <body>
 	<div class="container">
 	<?php 
 		echo "<table class='table table-striped table-bordered'>";
 		echo "<tr><th>Firstname</th> <th>Contact</th></tr>";
 		while ($row = mysqli_fetch_array($query)) {
 			echo "<tr>";
 			echo "<td>" . $row['firstname'] ."</td>";
 			echo "<td>" . $row['contact'] ."</td>";
 			echo "</tr>";
 			echo "<pre>";
 			echo print_r($row);
 		}
 		echo "</table>";
 	 ?>
 	 </div>
 </body>
 </html>