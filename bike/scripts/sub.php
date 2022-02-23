<?php
			function dosub() {
				
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

				$Id = $_POST['sid'];
				$size = $_POST['ssize'];
				$reach = $_POST['sreach'];
				$stack = $_POST['sstack'];
				$seattubect = $_POST['sseattubect'];
				$seatangle = $_POST['sseatangle'];
				$headangle = $_POST['sheadangle'];
				$headtube = $_POST['sheadtube'];
				$chainstay = $_POST['schainstay'];
				$wheelbase = $_POST['swheelbase'];
				$frontcenter = $_POST['sfrontcenter'];
				$bbdrop = $_POST['sbbdrop'];
				$fwheelsize = $_POST['swheelsize'];
				$rwheelsize = $_POST['swheelsize'];
				
				$sql = "INSERT INTO geo(size, reach, stack, seattubect, seatangle, headangle, headtube, chainstay, wheelbase, frontcenter, bbdrop, fwheelsize, rwheelsize, bid)
						VALUES ('$size', '$reach', '$stack', '$seattubect', '$seatangle', '$headangle', '$headtube', '$chainstay', '$wheelbase', '$frontcenter', '$bbdrop', '$fwheelsize', '$rwheelsize', '$Id')";
					
					#echo "Test";
					
				if (!mysqli_query($con, $sql)) {
					echo "Error: " . $sql . "<br>" . mysqli_error($con);
				} else {
					echo "Element updated successfully";
				} 

				mysqli_close($con);
			}
		?>
