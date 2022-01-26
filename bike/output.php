<!-- html for output page -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Output</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="scripts/script.js"></script>
	<script src="scripts/add.php"></script>
	<script src="scripts/delete.php"></script>
	<script src="scripts/edit.php"></script>
	<script src="scripts/view.php"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
<h1>test</h1>
	<div class='topbar'><a href="https://www.cs.unca.edu/~mpfeifer/bike/">Home</a></div>
	
	
	<br>
	<br>
	<br>
	<div class="table">
	<!-- making connection to database -->
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
			echo "<center><p class='title'>Bikes in Database</p></center>"
		?>
		
		<!-- displaying main output table for bikes -->
		<div class="maintablediv">
			<table class="maintable">
				<tr> 
					<th>ID</th>
					<th>Manufaturer</th>
					<th>Model</th>
					<th>Build Kit</th>
					<th>MSRP</th>
					<th>Year</th>
					<th>Material</th>
				</tr>

			<!-- querying database for bikes -->
				<?php
				while ($row = mysqli_fetch_array($result)) {
					$id = $row['id'];
					$brand = $row['brand'];
					$model = $row['model'];
					$kit = $row['kit'];
					$msrp = $row['msrp'];
					$my = $row['modelyear'];
					$mat = $row['material'];
				?>
					<tr> 
						<td><?php echo "$id"; ?></td>
						<td><?php echo "$brand"; ?></td>
						<td><?php echo "$model"; ?></td>
						<td><?php echo "$kit"; ?></td>
						<td><?php echo "$msrp"; ?></td>
						<td><?php echo "$my"; ?></td>
						<td><?php echo "$mat"; ?></td>
						
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
				<p onclick="show('showadder', 'showediter', 'showdeleter', 'showview')" class="but">Add Bike</p>
			</span>
			<span class="e" id="ee" onMouseOver="buthov('ee')" onMouseOut="butunhov('ee')">
				<p onclick="show('showediter', 'showdeleter', 'showview', 'showadder')" class="but">Update Bike</p>
			</span>
			<span class="d" onMouseOver="buthov('dd')" onMouseOut="butunhov('dd')">
				<p onclick="show('showdeleter', 'showview', 'showediter', 'showadder')" class="but" id="dd">Delete Bike</p>
			</span>
			<span class="v" id="vv" onMouseOver="buthov('vv')" onMouseOut="butunhov('vv')">
				<p onclick="show('showview', 'showediter', 'showadder', 'showdeleter')" class="but">View Bike Geo</p>
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
		<label for="ebrand">Manufaturer: </label><input name="abrand" type="text" class="in" id="pbrand"> <br>
		<label for="ename">Model: </label><input name="aname" type="text" class="in" id="pname"> <br>
		<label for="ekit">Build Kit: </label><input name="akit" type="text" class="in" id="pkit"> <br>
		<label for="emsrp">MSRP: </label><input name="amsrp" type="text" class="in" id="pmsrp"> <br>
		<label for="emy">Year: </label><input name="amy" type="text" class="in" id="pmy"> <br>
		<label for="emat">Frame Material: </label><input name="amat" type="text" class="in" id="pmat"> <br>		<!--<input name="store" type="text" id="pname">-->
		<input name="add" type="submit" id="padd" value="Add">
		</form>
		</div>
	</center>
		<?php
			include 'scripts/add.php';
			
			if(isset($_POST['add'])){
				doadd();
				?>
				
				<?php
			}			
		?>		
	</div>
	
	<div class="editer" id="showediter">
	<center>
		<div class="box2">
		<form method="post" id="addform">
		<label for="id">ID: </label><input name="id" type="text" class="in" id="pid"> 
		<label for="esize">Size: </label><input name="esize" type="text" class="in" id="psize"> 
		<label for="ereach">Reach: </label><input name="ereach" type="text" class="in" id="preach">
		<label for="estack">Stack: </label><input name="estack" type="text" class="in" id="pstack">
		<label for="etoptubeeffective">Top Tube (Effective): </label><input name="etoptubeeffective" type="text" class="in" id="ptoptubeeffective"> 
		<label for="etoptubeactual">Top Tube (Actual): </label><input name="etoptubeactual" type="text" class="in" id="ptoptubeactual"> 
		<label for="eseattubect">Seat Tube CT: </label><input name="eseattubect" type="text" class="in" id="pseattubect">
		<label for="eseattubecc">Seat Tube CC: </label><input name="eseattubecc" type="text" class="in" id="pseattubecc"> 
		<label for="eseattubeeffective">Seat Tube (Effective): </label><input name="eseattubeeffective" type="text" class="in" id="pseattubeeffective"> 
		<label for="eseatpostdia">Seat Post Diamiter: </label><input name="eseatpostdia" type="text" class="in" id="pseatpostdia"> 
		<label for="eseatpostlength">Seat Post Length: </label><input name="eseatpostlength" type="text" class="in" id="pseatpostlength"> 
		<label for="eseatpostmaxinsert">Seat Post Max Insert: </label><input name="eseatpostmaxinsert" type="text" class="in" id="pseatpostmaxinsert">
		<label for="eseatangle">Seat Angle: </label><input name="eseatangle" type="text" class="in" id="pseatangle"> 
		<label for="eheadangle">Head Angle: </label><input name="eheadangle" type="text" class="in" id="pheadangle"> 
		<label for="eheadtube">Head Tube: </label><input name="eheadtube" type="text" class="in" id="pheadtube"> 
		<label for="eheadset">Head Set: </label><input name="eheadset" type="text" class="in" id="pheadset"> 
		<label for="echainstay">Chainstay: </label><input name="echainstay" type="text" class="in" id="pchainstay"> 
		<label for="ewheelbase">Wheelbase: </label><input name="ewheelbase" type="text" class="in" id="pwheelbase">
		<label for="efrontcenter">Front-Center: </label><input name="efrontcenter" type="text" class="in" id="pfrontcenter">
		<label for="estandover">Standover: </label><input name="estandover" type="text" class="in" id="pstandover"> 
		<label for="ebbdrop">Botom Braket Drop: </label><input name="ebbdrop" type="text" class="in" id="pbbdrop">
		<label for="ebbheight">Bottom Braket Height: </label><input name="ebbheight" type="text" class="in" id="pbbheight"> 
		<label for="ebbtype">Bottom Braket Type: </label><input name="ebbtype" type="text" class="in" id="pbbtype">
		<label for="erake">Rake: </label><input name="erake" type="text" class="in" id="prake"> 
		<label for="etrail">Trail: </label><input name="etrail" type="text" class="in" id="ptrail">
		<label for="eaxletocrown">Axle to Crown: </label><input name="eaxletocrown" type="text" class="in" id="paxletocrown">
		<label for="eaxlespaceing">Axle Spaceing: </label><input name="eaxlespaceing" type="text" class="in" id="paxlespaceing"> 
		<label for="efwheelsize">Front Wheel Size: </label><input name="efwheelsize" type="text" class="in" id="pfwheelsize">
		<label for="erwheelsize">Rear Wheel Size: </label><input name="erwheelsize" type="text" class="in" id="prwheelsize"> 
		<label for="etiremaxwidth">Tire Max Width: </label><input name="etiremaxwidth" type="text" class="in" id="ptiremaxwidth"> 
		<label for="ehandlebarwidth">Handle Bar Width: </label><input name="ehandlebarwidth" type="text" class="in" id="phandlebarwidth">
		<label for="estemlength">Stem Length: </label><input name="estemlength" type="text" class="in" id="pstemlength">
		<label for="estemangle">Stem Angle: </label><input name="estemangle" type="text" class="in" id="pstemangle">
		<label for="ecranklength">Crank Length: </label><input name="ecranklength" type="text" class="in" id="pcranklength">
		<label for="eftravel">Front Travel: </label><input name="eftravel" type="text" class="in" id="pftravel">
		<label for="ertravel">Rear Travel: </label><input name="ertravel" type="text" class="in" id="prtravel">
		<label for="eshocksize">Shock Size: </label><input name="eshocksize" type="text" class="in" id="pshocksize">
		<label for="eweight">Weight: </label><input name="eweight" type="text" class="in" id="pweight"><br>
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
	
	<div class="viewer" id="showview">
	<center>
		<div class="box">
		<form method="post" id="viewform">
		<label for="id">ID: </label><input name="theid" type="text" class="in" id="pid"> <br>
		<button action="<?php $res=$_POST['theid'];?>" name="view" type="submit" id="pview" value="View" onclick="show2()">View</button>
		</form>
		</div>
	</center>
		<?php
			include 'scripts/view.php';
		
			if(isset($_POST['view'])) {
				doview($res);
			}
		?>		
	</div>
</body>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>