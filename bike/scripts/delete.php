	<?php
		function dodelete() {	
			if(isset($_POST['delete'])){
				error_reporting(E_ALL);
				ini_set('display_errors', 1);
					$servername = "avl.cs.unca.edu";
					$username="mpfeifer";
					$password="ClamorCapacitySchnapps";
					$dbname="mpfeifer";
					$con = new mysqli($servername, $username, $password, $dbname);
				if ($con->connect_error) {
					die("Connection failed: " . $con->connect_error);
				}

				$Id = $_POST['id'];

				$sql = "DELETE FROM bike
						WHERE id = '$Id'";		

				if (!mysqli_query($con, $sql)) {
					echo "Error: " . $sql . "<br>" . mysqli_error($con);
				} else {
					echo "Element deleted successfully";
				}

				mysqli_close($con);
			}
		}
	?>
