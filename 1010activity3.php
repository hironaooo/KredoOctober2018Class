<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
	</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<style>
		.table border{
			border : solid 1px black;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
	 	<label for="name">Enter a number : </label>
	 	<input type="number" name="number">
	 	<input class="submit" type="submit" value="SUBMIT" name="submit">
	</form>	
		<p>Output : </p><br>
	<?php 
	 	$number = $_POST['number'];
		if ( isset($_POST['submit'])) {
			for ($i=1; $i <= $number; $i++) { 
					<tr>	
				    echo "
				      		<th>1</th>
				      		<td>Mark</td>
				   		 ";
				   	</tr>
			}
		}
	?> 	
		<table class="table table-bordered">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr>
 
  </tbody>
</table>
</body>
</html>