<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Testing!</title>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="scripts/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

	<div class="header">
		Phones
	</div>
	<br>
	<br>
	<br>
	<div class="table">
		<?php 
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
			$query = "SELECT * FROM bike";
			$result = mysqli_query($con, $query);
			mysqli_close($con);
			echo "<center><p class='title'>bikes in Database</p></center>"
		?>
		<div class="maintablediv">
			<table class="maintable">
				<tr> 
					<th>ID</th>
					<th>Manufacturer</th>
					<th>Model Name</th>
					<th>Battery (mAh)</th>
					<th>Screen Resolution</th>
					<th>Storage/Ram</th>
					<th>Bands</th>
					<th>Price</th>
				</tr>

				<?php
				while ($row = mysqli_fetch_array($result)) {

					$id = $row['idPhone_Inventory'];
					$man = $row['Phone_Manufacturer'];
					$mod = $row['Phone_Name'];
					$price = $row['Phone_Price'];
					$batt = $row['Phone_Battery_Size'];
					$ram = $row['Phone_RAM'];
					$res = $row['Phone_Resolution'];
					$band = $row['Phone_Bands'];
					$storage = $row['Phone_Storage'];
				?>
					<tr> 
						<td><?php echo "$id"; ?></td>
						<td><?php echo "$man"; ?></td>
						<td><?php echo "$mod"; ?></td>
						<td><?php echo "$batt"; ?></td>
						<td><?php echo "$res"; ?></td>
						<td><?php echo "$storage / $ram"; ?></td>
						<td><?php echo "$band"; ?></td>
						<td><?php echo "$price"; ?></td>

					</tr>

				<?php
				}
					echo "</table>";
				?>				
			</div>

		<br>
		<div class="reloader">
			<center><a href="#" onclick="reloadtable()">Reload Table</a></center>
		</div>
	</div>
			
<!--	<center>-->
	<div class="selector">
	<center>
		<div class="b">
			<span class="a"  id="aa" onMouseOver="buthov('aa')" onMouseOut="butunhov('aa')">
				<p onclick="show('showadder', 'showediter', 'showdeleter')" class="but">Add Phone</p>
			</span>
			<span class="e" id="ee" onMouseOver="buthov('ee')" onMouseOut="butunhov('ee')">
				<p onclick="show('showediter', 'showdeleter', 'showadder')" class="but">Update Phone</p>
			</span>
			<span class="d" onMouseOver="buthov('dd')" onMouseOut="butunhov('dd')">
				<p onclick="show('showdeleter', 'showediter', 'showadder')" class="but" id="dd">Delete Phone</p>
			</span>
		</div>
	</center>
	</div>
<!--	</center>-->

	<div class="adder" id="showadder">
	<center>
		<div class="box">
		<form method="post" id="addform">
		<!--<input name="id" type="text" id="pid">-->
		<label for="aman">Manufaturer: </label><input name="aman" type="text" class="in" id="pman" onKeyUp="hinter(this.value)"> <br>
			<p><span id="hint"></span></p>
		<label for="ename">Phone Name: </label><input name="aname" type="text" class="in" id="pname"> <br>
		<label for="abatt">Battery: </label><input name="abatt" type="text" class="in" id="pbatt"> <br>
		<label for="ares">Resolution: </label><input name="ares" type="text" class="in" id="pname"> <br>
		<label for="astore">Internal Storage: </label><input name="astore" type="text" class="in" id="pstore"> <br>
		<label for="aram">Ram: </label><input name="aram" type="text" class="in" id="pram"> <br>
		<label for="aband">Bands: </label><input name="aband" type="text" class="in" id="pname"> <br>
		<label for="aprice">Price: </label><input name="aprice" type="text" class="in" id="pprice"> <br>
		<!--<input name="store" type="text" id="pname">-->
		<input name="add" type="submit" id="padd" value="Add">
		</form>
		</div>
	</center>
		<?php
			include 'scripts/add.php';
			
			if(isset($_POST['add'])){
				doadd();
				?>
				<script>location.href = 'added.html';</script>
				<?php
			}			
		?>		
	</div>
	
	<div class="editer" id="showediter">
	<center>
		<div class="box">
		<form method="post" id="addform">
		<label for="id">ID: </label><input name="id" type="text" class="in" id="pid"> <br>
		<label for="eman">Manufaturer: </label><input name="eman" type="text" class="in" id="pman"> <br>
		<label for="ename">Phone Name: </label><input name="ename" type="text" class="in" id="pname"> <br>
		<label for="ebatt">Battery: </label><input name="ebatt" type="text" class="in" id="pbatt"> <br>
		<label for="eres">Resolution: </label><input name="eres" type="text" class="in" id="pname"> <br>
		<label for="estore">Internal Storage: </label><input name="estore" type="text" class="in" id="pstore"> <br>
		<label for="eram">Ram: </label><input name="eram" type="text" class="in" id="pram"> <br>
		<label for="eband">Bands: </label><input name="eband" type="text" class="in" id="pname"> <br>
		<label for="eprice">Price: </label><input name="eprice" type="text" class="in" id="pprice"> <br>
		<input name="edit" type="submit" class="in" id="pedit" value="Update">
		</form>
		</div>
	</center>
		<?php
			include 'scripts/edit.php';
		
			if(isset($_POST['edit'])) {
				doedit();
			}
		?>		
	</div>
	
	<div class="deleter" id="showdeleter">
	<center>
		<div class="box">
		<form method="post" id="deleteform">
		<label for="id">ID: </label><input name="id" type="text" class="in" id="pid"> <br>
		<input name="delete" type="submit" id="pdelete" value="Delete">
		</form>
		</div>
	</center>
		<?php
			include 'scripts/delete.php';
		
			if(isset($_POST['delete'])) {
				dodelete();
			}
		?>		
	</div>
</body>
</html>