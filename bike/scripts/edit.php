		<?php
			function doedit() {
				
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
				$size = $_POST['esize'];
				$reach = $_POST['ereach'];
				$stack = $_POST['estack'];
				$toptubeeffective = $_POST['etoptubeeffective'];
				$toptubeactual = $_POST['etoptubeactual'];
				$seattubect = $_POST['eseattubect'];
				$seattubecc = $_POST['eseattubecc'];
				$seattubeeffective = $_POST['eseattubeeffective'];
				$seatpostdia = $_POST['eseatpostdia'];
				$seatpostlength = $_POST['eseatpostlength'];
				$seatpostmaxinsert = $_POST['eseatpostmaxinsert'];
				$seatangle = $_POST['eseatangle'];
				$headangle = $_POST['eheadangle'];
				$headtube = $_POST['eheadtube'];
				$headset = $_POST['eheadset'];
				$chainstay = $_POST['echainstay'];
				$wheelbase = $_POST['ewheelbase'];
				$frontcenter = $_POST['efrontcenter'];
				$standover = $_POST['estandover'];
				$bbdrop = $_POST['ebbdrop'];
				$bbheight = $_POST['ebbheight'];
				$bbtype = $_POST['ebbtype'];
				$rake = $_POST['erake'];
				$trail = $_POST['etrail'];
				$axletocrown = $_POST['eaxletocrown'];
				$axlespaceing = $_POST['eaxlespaceing'];
				$fwheelsize = $_POST['efwheelsize'];
				$rwheelsize = $_POST['erwheelsize'];
				$tiremaxwidth = $_POST['etiremaxwidth'];
				$handlebarwidth = $_POST['ehandlebarwidth'];
				$stemlength = $_POST['estemlength'];
				$stemangle = $_POST['estemangle'];
				$cranklength = $_POST['ecranklength'];
				$ftravel = $_POST['eftravel'];
				$rtravel = $_POST['ertravel'];
				$shocksize = $_POST['eshocksize'];
				$weight = $_POST['eweight'];		

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
		?>
