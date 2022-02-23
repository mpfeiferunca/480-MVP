<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image Input</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/style.css">
	
	
	
</head>

<body>
<?php
			/*
			function doedit2() {
				
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

				$Id = "<script>document.write(modeliid)</script>";
				$size = "<script>document.write(framesize)</script>";
				$reach = "<script>document.write(reach)</script>";
				$stack = "<script>document.write(stack)</script>";
				$toptubeeffective = 0;
				$toptubeactual = 0;
				$seattubect = 0;
				$seattubecc = 0;
				$seattubeeffective = 0;
				$seatpostdia = 0;
				$seatpostlength = 0;
				$seatpostmaxinsert = 0;
				$seatangle = 0;
				$headangle = 0;
				$headtube = 0;
				$headset = ;
				$chainstay = 0;
				$wheelbase = 0;
				$frontcenter = 0;
				$standover = 0;
				$bbdrop = 0;
				$bbheight = 0;
				$bbtype = 0;
				$rake = 0;
				$trail = 0;
				$axletocrown = 0;
				$axlespaceing = 0;
				$fwheelsize = 0;
				$rwheelsize = 0;
				$tiremaxwidth = 0;
				$handlebarwidth = 0;
				$stemlength = 0;
				$stemangle = 0;
				$cranklength = 0;
				$ftravel = 0;
				$rtravel = 0;
				$shocksize = 0;
				$weight = 0;		

				$sql = "INSERT INTO geo(size, reach, stack, toptubeeffective, toptubeactual, seattubect, seattubecc, seattubeeffective, seatpostdia, seatpostlength, seatpostmaxinsert, seatangle, headangle, headtube, headset, chainstay, wheelbase, frontcenter, standover, bbdrop, bbheight, bbtype, rake, trail, axletocrown, axlespaceing, fwheelsize, rwheelsize, tiremaxwidth, handlebarwidth, stemlength, stemangle, cranklength, ftravel, rtravel, shocksize, weight, bid)
						VALUES ('$size', '$reach', '$stack', '$toptubeeffective', '$toptubeactual', '$seattubect', '$seattubecc', '$seattubeeffective', '$seatpostdia', '$seatpostlength', '$seatpostmaxinsert', '$seatangle', '$headangle', '$headtube', '$headset', '$chainstay', '$wheelbase', '$frontcenter', '$standover', '$bbdrop', '$bbheight', '$bbtype', '$rake', '$trail', '$axletocrown', '$axlespaceing', '$fwheelsize', '$rwheelsize', '$tiremaxwidth', '$handlebarwidth', '$stemlength', '$stemangle', '$cranklength', '$ftravel', '$rtravel', '$shocksize', '$weight', '$Id')";
					
					#echo "Test";
					
				if (!mysqli_query($con, $sql)) {
					echo "Error: " . $sql . "<br>" . mysqli_error($con);
				} else {
					echo "Element updated successfully";
				} 

				mysqli_close($con);
			} 
			*/
	?>
	<div class='topbar'><a href="https://www.cs.unca.edu/~mpfeifer/bike/">Home</a></div> <!-- nav bar -->
	
	<input type="file" class="inbut" id="imageinput" accept="image/jpeg"> <!-- button used to upload image -->
	
	<center><button onclick="starter()" class="startimport" id="startimport">Start Import</button></center>
	
	<div id='area' class='imgarea'></div> <!-- "canvas for import by image tool -->
	
	<div class ="tooltip" id="tooltip"> </div>
	
	<div class="finsub" id="finsub">
		<form method="post" id="subform">
			<input name="sid" type="hidden" id="ssid" value=modeliid> 
			<input name="ssize" type="hidden" id="sssize" value=framesize> 
			<input name="swheelsize" type="hidden" id="sswheelsize" value=wheelsize> 
			<input name="sreach" type="hidden" id="ssreach" value=reach> 
			<input name="sstack" type="hidden" id="ssstack" value=stack> 
			<input name="sseattubect" type="hidden" id="ssseattubect" value=seatubect> 
			<input name="swheelbase" type="hidden" id="sswheelbase" value=wheelbase> 
			<input name="schainstay" type="hidden" id="sschainstay" value=chainstay> 
			<input name="sbbdrop" type="hidden" id="ssbbdrop" value=bbdrop> 
			<input name="sheadangle" type="hidden" id="ssheadangle" value=headangle> 
			<input name="sseatangle" type="hidden" id="ssseatangle" value=seatangle> 
			<input name="sheadtube" type="hidden" id="ssheadtube" value=headtube> 
			<input name="sfrontcenter" type="hidden" id="ssfrontcenter" value=frontcenter> 
			<input name="stoptube" type="hidden" id="sstoptube" value=toptube> 
			<input name="sub" type="submit" id="ssub" value="Submit">
		</form>
	</div>

		<?php
			include 'scripts/sub.php';
			
			if(isset($_POST['sub'])){
				dosub();
				?>
				
				<?php
			}			
		?>		
	
	<script>
		//function for uploading image to import from image tool
		var modeliid = sessionStorage.getItem("Modeliid");
		//alert(modeliid);
		var pxtomm
		var framesize = "L";
		var wheelsize = 27.5;
		var xPosition = 0;
		var yPosition = 0;
		var counter = 0;
		var centeroffrontwheelx = 0;
		var centeroffrontwheely = 0;
		var centerofrearwheelx = 0;
		var centerofrearwheely = 0;
		var centerofbbx = 0;
		var centerofbby = 0;
		var topofseattubex = 0;
		var topofseattubey = 0;
		var topofheadtubex = 0;
		var topofheadtubey = 0;
		var bottomofheadtubex = 0;
		var bottomofheadtubey = 0;
		var bottomofrimx1 = 0;
		var bottomofrimy1 = 0;
		var bottomofrimx2 = 0;
		var bottomofrimy2 = 0;
		var topofrimx1 = 0;
		var topofrimy1 = 0;
		var topofrimx2 = 0;
		var topofrimy2 = 0;
		
		var wheelbase = 0;
		var toptube = 0;
		var chainstay = 0;
		var reach = 0;
		var stack = 0;
		var seattubect = 0;
		var frontcenter = 0;
		var seatangle = 0;
		var headangle = 0;
		var headtube = 0;
		var bbdrop = 0;
		const image_input = document.querySelector("#imageinput");

		image_input.addEventListener("change", function () {
			const reader = new FileReader(); //create file reader
			reader.addEventListener("load", () => {
				const uploadedimage = reader.result;
				document.querySelector("#area").style.backgroundImage = `url(${uploadedimage})`; //set background of area to uploaded image
			});
			reader.readAsDataURL(this.files[0]);
			
			document.getElementById('startimport').style.display  = "block"; //show start button
		});
		
		
		
		//functions for getting click position for import from image tool
		var thearea = document.querySelector("#area"); 
		//thearea.addEventListener("click", getClickPosition, false); //calling getclickposition
		
		//call this function to get a click position
		function getClickPosition(e) {
			xPosition = 0;
			yPosition = 0;
			var parentPosition = getpos(e.currentTarget); //call getpos funtion
			xPosition = e.clientX - parentPosition.x ; //call getparent for x
			yPosition = e.clientY - parentPosition.y ; //call getparent for y
	
			//alert(xPosition); 
			//alert(yPosition);
			
			/*if (counter == 7) {
				= xPosition;
				= yPosition;
				counter = 8;
				document.getElementById('tooltip').innerHTML  = "Click on ...";
			}*/
			
			if (counter == 7) {
				bottomofheadtubex = xPosition;
				bottomofheadtubey = yPosition;
				counter = 8;
				document.getElementById('tooltip').innerHTML  = "Click on ...";
				docalc();
			}
			
			if (counter == 6) {
				topofheadtubex = xPosition;
				topofheadtubey = yPosition;
				counter = 7;
				document.getElementById('tooltip').innerHTML  = "Click on the bottom of the head tube";
			}
			
			if (counter == 5) {
				topofseattubex = xPosition;
				topofseattubey = yPosition;
				counter = 6;
				document.getElementById('tooltip').innerHTML  = "Click on the top of the head tube";
			}
			
			if (counter == 4) {
				centerofbbx = xPosition;
				centerofbby = yPosition;
				counter = 5;
				document.getElementById('tooltip').innerHTML  = "Click on The top of the seat tube";
			}
			
			if (counter == 3) {
				bottomofrimx2 = xPosition;
				bottomofrimy2 = yPosition;
				counter = 4;
				document.getElementById('tooltip').innerHTML  = "Click on the center of the bottom bracket";
				//alert("f:" + centeroffrontwheelx + " r:" + centerofrearwheelx + " pxtomm:" + pxtomm + " wb:" + wheelbase);
				//alert(centeroffrontwheely + " " + bottomofrimy);
			}
			if (counter == 22) {
				topofrimx2 = xPosition;
				topofrimy2 = yPosition;
				counter = 3;
				//alert(bottomofrimx); 
				//alert(bottomofrimy);
				document.getElementById('tooltip').innerHTML  = "Click on lowest point on the outside edge of the rear rim"; 
				//alert("1px = " + pxtomm + "mm");
			}
			if (counter == 11) {
				topofrimx1 = xPosition;
				topofrimy1 = yPosition;
				counter = 22;
				//alert(bottomofrimx); 
				//alert(bottomofrimy);
				document.getElementById('tooltip').innerHTML  = "Click on highest point on the outside edge of the rear rim"; 
				//alert("1px = " + pxtomm + "mm");
			}
			if (counter == 2){
				centerofrearwheelx = xPosition;
				centerofrearwheely = yPosition;
				counter = 11;
				//alert(centeroffrontwheelx); 
				//alert(centeroffrontwheely);
				document.getElementById('tooltip').innerHTML  = "Click on highest point on the outside edge of the front rim"; 
			}
			if (counter == 1) {
				bottomofrimx1 = xPosition;
				bottomofrimy1 = yPosition;
				counter = 2;
				//alert(bottomofrimx); 
				//alert(bottomofrimy);
				document.getElementById('tooltip').innerHTML  = "Click on the center of the rear wheel"; 
				//alert("1px = " + pxtomm + "mm");
			}
			if (counter == 0){
				centeroffrontwheelx = xPosition;
				centeroffrontwheely = yPosition;
				counter = 1;
				//alert(centeroffrontwheelx); 
				//alert(centeroffrontwheely);
				document.getElementById('tooltip').innerHTML  = "Click on lowest point on the outside edge of the front rim"; 
			}
			
			
			
			
		}
		
		function docalc() {
			var pxtomm1 = (bottomofrimy1 - centeroffrontwheely);
			var pxtomm2 = (bottomofrimy2 - centerofrearwheely);
			var pxtomm3 = (centeroffrontwheely - topofrimy1);
			var pxtomm4 = (centerofrearwheely - topofrimy2);
			pxtomm = ((pxtomm1 + pxtomm2 + pxtomm3 + pxtomm4)/4);
				if (wheelsize == 26) {
					pxtomm = (559/pxtomm)/2;
				}
				if (wheelsize == 27.5) {
					pxtomm = (584/pxtomm)/2;
				}
				if (wheelsize == 29) {
					pxtomm = (622/pxtomm)/2;
				}
		
			wheelbase = (centeroffrontwheelx - centerofrearwheelx);
			wheelbase = wheelbase * pxtomm;
			
			chainstay = Math.sqrt(Math.pow((centerofrearwheelx - centerofbbx),2) + Math.pow((centerofrearwheely - centerofbby),2));
			//alert(Math.pow(centerofrearwheelx - centerofbbx));
			//alert(Math.pow(centerofrearwheely - centerofbby));
			chainstay = chainstay * pxtomm;
			
			bbdrop = centerofbby - centeroffrontwheely;
			bbdrop = bbdrop * pxtomm;
			
			//frontcenter = centeroffrontwheelx - centerofbbx;
			frontcenter = Math.sqrt(Math.pow((centeroffrontwheelx - centerofbbx),2) + Math.pow((centeroffrontwheely - centerofbby),2));
			frontcenter = frontcenter * pxtomm;
			
			headtube = bottomofheadtubey - topofheadtubey;
			headtube = headtube * pxtomm
			
			//seattubect = centerofbby - topofseattubey;
			seattubect = Math.sqrt(Math.pow((topofseattubex - centerofbbx),2) + Math.pow((topofseattubey - centerofbby),2));
			seattubect = seattubect * pxtomm;
			
			stack = centerofbby - topofheadtubey;
			stack = stack * pxtomm;
			
			reach = topofheadtubex - centerofbbx;
			reach = reach * pxtomm;
			
			toptube = topofheadtubex - topofseattubex;
			toptube = toptube * pxtomm;
			
			var m1 = ((topofheadtubey - bottomofheadtubey)/(topofheadtubex - bottomofheadtubex));
			headangle = Math.atan(m1) * (180/Math.PI);
			
			var m2 = ((topofseattubey - centerofbby)/(topofseattubex - centerofbbx));
			seatangle = Math.atan(m2) * (180/Math.PI);
			
			document.getElementById('tooltip').innerHTML  = "Seatangle:" + seatangle + " headangle:" + headangle + " reach:" + reach + " stack:" + stack + " seattubect:" + seattubect + " headtube:" + headtube + " frontcenter:" + frontcenter + " bbdrop:" + bbdrop + " chainstay:" + chainstay + " wheelbase:" + wheelbase + " toptube:" + toptube;
			
					document.getElementById("sssize").value = framesize;
				    document.getElementById("sswheelsize").value = wheelsize;
				    document.getElementById("ssreach").value = reach;
				    document.getElementById("ssstack").value = stack;
				    document.getElementById("ssseattubect").value = seattubect;
				    document.getElementById("sswheelbase").value = wheelbase;
				    document.getElementById("sschainstay").value = chainstay;
				    document.getElementById("ssbbdrop").value = bbdrop;
				    document.getElementById("ssheadangle").value = headangle;
				    document.getElementById("ssseatangle").value = seatangle;
				    document.getElementById("ssheadtube").value = headtube;
				    document.getElementById("ssfrontcenter").value = frontcenter;
				    document.getElementById("sstoptube").value = toptube;
				    document.getElementById("ssid").value = modeliid;
			
			document.getElementById('finsub').style.display  = "block"; //hide start button
		}
		
		//helper function fog get click position
		function getpos(el) {
			//var xPosition;
			//var yPosition;
 
			while (el) {
				if (el.tagName == "BODY") {
					var xScrollPos = el.scrollLeft || document.documentElement.scrollLeft;
					var yScrollPos = el.scrollTop || document.documentElement.scrollTop;
 
					xPosition += (el.offsetLeft - xScrollPos + el.clientLeft);
					yPosition += (el.offsetTop - yScrollPos + el.clientTop);
				} else {
					xPosition += (el.offsetLeft - el.scrollLeft + el.clientLeft);
					yPosition += (el.offsetTop - el.scrollTop + el.clientTop);           //doing math so pixel count is accurate to its div
				}
					el = el.offsetParent;
			}
			//alert(xPosition)
			//alert(yPosition)
			return {
				x: xPosition,
				y: yPosition //returns object containing x and y
			};
		}
		/*
		function starter() {
			var thearea = document.querySelector("#area"); 
			
			document.getElementById('startimport').style.display  = "none"; //hide start button
			document.getElementById('tooltip').style.display  = "block"; //show tooltip
			document.getElementById('tooltip').innerHTML  = "Click on the center of the front wheel"; 
			thearea.addEventListener("click", getClickPosition, false);
			alert(xPosition); 
			alert(yPosition);
		}
		*/
		
		function starter() {
			document.getElementById('startimport').style.display  = "none"; //hide start button
			wheelsize = prompt("Please enter the wheel size", "26, 27.5 or 29?");
			framesize = prompt("Please enter the frame size", "S, M, L, XL, etc.");
			document.getElementById('tooltip').style.display  = "block"; //show tooltip
			document.getElementById('tooltip').innerHTML  = "Click on the center of the front wheel"; 
			thearea.addEventListener("click", getClickPosition, false);
			//alert(xPosition); 
			//alert(yPosition); //add another event listener to store x and y
		}
	</script>
</body>