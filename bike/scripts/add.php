		<?php
			function doadd() {
				//header("Location: sql.php");
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

				//$Id = $_POST['id'];
				$brand = $_POST['abrand'];
				$model = $_POST['aname'];
				$kit = $_POST['akit'];
				$msrp = $_POST['amsrp'];
				$my = $_POST['amy'];
				$mat = $_POST['amat'];

				$sql = "INSERT INTO bike (brand, model, kit, msrp, modelyear, material)
						VALUES ('$brand', '$model', '$kit', '$msrp', '$my', '$mat')";		

				if (!mysqli_query($con, $sql)) {
					echo "Error: " . $sql . "<br>" . mysqli_error($con);
				} else {
					//header('Location: added.html');
				}
					
				mysqli_close($con);
			}
?>