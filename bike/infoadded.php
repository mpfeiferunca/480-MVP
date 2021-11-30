<html>

<body>

<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['model'])){
		$data_missing[] = 'model';
		echo "???";
	} else {
		$f_name = trim($POST['model']);
		echo $f_name;
	}
	
	if(empty($data_missing)){
		require_once('mysqliconnect.php');
		
		$query = "INSERT INTO bike (model, brand, id) VALUES (?, 'test', NULL)";
		
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "ss", $model, $brand);
		
		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		if($affected_rows == 1) {
			echo 'Sucssess';
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		} else {
			echo 'Error!';
			echo mysqli_error($dbc);
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		}
	} else {
		echo 'Data Missing!';
	}
}

?>

<form action = "https://www.cs.unca.edu/~mpfeifer/bike/infoadded.php" method = "post">
	<b>Add New Geo</b>
	<p>Model: <input type="text" name="model" size="30" value=""/></p>
	
	<p><input type="submit" name="submit" value="Submit"/></p>
</form>

</body>

</html>