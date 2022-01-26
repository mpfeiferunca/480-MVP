<!-- import as text page -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Text Input</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="scripts/script.js"></script>
</head>

<body>

<!-- text boxs for import bike as text tool -->
	<div class='topbar'><a href="https://www.cs.unca.edu/~mpfeifer/bike/">Home</a></div>
	<br><br><br><br>
	<center>
		<div class="box">
		<form method="post" id="addform">
		<!--<input name="id" type="text" id="pid">-->
		<label for="ebrand">Manufaturer: </label><input name="abrand" type="text" class="in" id="pbrand"> <br>
		<label for="ename">Model: </label><input name="aname" type="text" class="in" id="pname"> <br>
		<label for="ekit">Build Kit: </label><input name="akit" type="text" class="in" id="pkit"> <br>
		<label for="emsrp">MSRP: </label><input name="amsrp" type="text" class="in" id="pmsrp"> <br>
		<label for="emy">Year: </label><input name="amy" type="text" class="in" id="pmy"> <br>
		<label for="emat">Frame Material: </label><input name="amat" type="text" class="in" id="pmat"> <br>
		<!--<input name="store" type="text" id="pname">-->
		<input name="add" type="submit" id="padd" value="Add">
		</form>
		</div>
	</center>
	
	<!-- query to databse to add bike to database -->
		<?php
			include 'scripts/add.php';
			
			if(isset($_POST['add'])){
				doadd();
				
				?>
				<script>location.href = 'output.php';</script>
				<?php
				
			}			
		?>		
</body>