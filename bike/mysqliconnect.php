<?php

DEFINE ('DB_USER', 'mpfeifer');
DEFINE ('DB_PASSWORD', 'ClamorCapacitySchnapps');
DEFINE ('DB_HOST', 'avl.cs.unca.edu');
DEFINE ('DB_NAME', 'mpfeifer');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to database!' .
		mysqli_connect_error());


/*

			$servername = "avl.cs.unca.edu";
			$username="mpfeifer";
			$password="ClamorCapacitySchnapps";
			$dbname="mpfeifer";
			$con = new mysqli($servername, $username, $password, $dbname);
			if ($con->connect_error) {
				die("Connection failed: " . $con->connect_error);
			}
			$query = "SELECT * FROM bike";
			$result = mysqli_query($con, $query);
			mysqli_close($con);
			echo "<center><p class='title'>Database test</p></center>"
*/
?>