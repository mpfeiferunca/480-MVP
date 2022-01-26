<!-- database query to connect to database for bike table -->

<?php

require_once('mysqliconnect.php');

$query  = "SELECT model FROM bike";

$response = @mysqli_query($dbc, $query);

if($response){
	echo '<table align = "left" cellspaceing = "5" cellpadding = "8">
			<tr>
			<td align = "left"><b>Model</b></td>
			</tr>';
	while ($row = mysqli_fetch_array($response)){
		echo '<tr>
			<td align = "left">' . 
			$row['model'] . '</td> <td align = "left">';// . 
		echo '</tr>';
	}
/*

	while ($row = mysqli_fetch_array($response)){
		$model = $row['model'];
		
	?>
		<tr>
		<td><?php echo $model;?></td>
		</tr>
	<?php
	}
	echo '</table>';
*/
} else {
	echo "Could not connect!";
	
	echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>