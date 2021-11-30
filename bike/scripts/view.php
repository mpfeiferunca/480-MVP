<?php
	function doview($res) {
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
		$query = "SELECT * FROM geo";
			$result = mysqli_query($con, $query);
			#mysqli_close($con);
?>
		<div id = 'viewer2' class="viewer2">
			<table id = 'maintable2' class="maintable2">
				<tr> 
					<th>Size</th>
					<th>Reach</th>
					<th>Stack</th>
					<th>Top Tube (Effective)</th>
					<th>Toptube (Actual)</th>
					<th>Seattube CT</th>
					<th>Seattube CC</th>
					<th>Seattube (Effective)</th>
					<th>Seatpost Diamiter</th>
					<th>Seatpost Length</th>
					<th>Seatpost Max Insert</th>
					<th>Seat Angle</th>
					<th>Head Angle</th>
					<th>Headtube</th>
					<th>Headset</th>
					<th>Chainstay</th>
					<th>Wheelbase</th>
					<th>Front-center</th>
					<th>Standover</th>
					<th>BB drop</th>
					<th>BB height</th>
					<th>BB type</th>
					<th>Rake</th>
					<th>Trail</th>
					<th>Axle to Crown</th>
					<th>Axle Spaceing</th>
					<th>Front Wheel Size</th>
					<th>R Wheel Size</th>
					<th>Tire Max Width</th>
					<th>Handlebar Width</th>
					<th>Stem Length</th>
					<th>Stem Angle</th>
					<th>Crank Length</th>
					<th>Front Travel</th>
					<th>Rear Travel</th>
					<th>Shock size</th>
					<th>Weight</th>
				</tr>
			<?php
								#$id = 2;
								#echo $id;
								#echo $res;
				while ($row = mysqli_fetch_array($result)) {
					$bid = $row['bid'];

					$size = $row['size'];
					$reach = $row['reach'];
					$stack = $row['stack'];
					$toptubeeffective = $row['toptubeeffective'];
					$toptubeactual = $row['toptubeactual'];
					$seattubect = $row['seattubect'];
					$seattubecc = $row['seattubecc'];
					$seattubeeffective = $row['seattubeeffective'];
					$seatpostdia = $row['seatpostdia'];
					$seatpostlength = $row['seatpostlength'];
					$seatpostmaxinsert = $row['seatpostmaxinsert'];
					$seatangle = $row['seatangle'];
					$headangle = $row['headangle'];
					$headtube = $row['headtube'];
					$headset = $row['headset'];
					$chainstay = $row['chainstay'];
					$wheelbase = $row['wheelbase'];
					$frontcenter = $row['frontcenter'];
					$standover = $row['standover'];
					$bbdrop = $row['bbdrop'];
					$bbheight = $row['bbheight'];
					$bbtype = $row['bbtype'];
					$rake = $row['rake'];
					$trail = $row['trail'];
					$axletocrown = $row['axletocrown'];
					$axlespaceing = $row['axlespaceing'];
					$fwheelsize = $row['fwheelsize'];
					$rwheelsize = $row['rwheelsize']; 
					$tiremaxwidth = $row['tiremaxwidth'];
					$handlebarwidth = $row['handlebarwidth'];
					$stemlength = $row['stemlength'];
					$stemangle = $row['stemangle'];
					$cranklength = $row['cranklength'];
					$ftravel = $row['ftravel'];
					$rtravel = $row['rtravel'];
					$shocksize = $row['shocksize'];
					$weight = $row['weight'];		
				if($bid == $res) {
					#echo $bid;
			?>
			
					<tr>
						<td><?php echo "$size"; ?></td>
						<td><?php echo "$reach"; ?></td>
						<td><?php echo "$stack"; ?></td>
						<td><?php echo "$toptubeeffective"; ?></td>
						<td><?php echo "$toptubeactual"; ?></td>
						<td><?php echo "$seattubect"; ?></td>
						<td><?php echo "$seattubecc"; ?></td>
						<td><?php echo "$seattubeeffective"; ?></td>
						<td><?php echo "$seatpostdia"; ?></td>
						<td><?php echo "$seatpostlength"; ?></td>
						<td><?php echo "$seatpostmaxinsert"; ?></td>
						<td><?php echo "$seatangle"; ?></td>
						<td><?php echo "$headangle"; ?></td>
						<td><?php echo "$headtube"; ?></td>
						<td><?php echo "$headset"; ?></td>
						<td><?php echo "$chainstay"; ?></td>
						<td><?php echo "$wheelbase"; ?></td>
						<td><?php echo "$frontcenter"; ?></td>
						<td><?php echo "$standover"; ?></td>
						<td><?php echo "$bbdrop"; ?></td>
						<td><?php echo "$bbheight"; ?></td>
						<td><?php echo "$bbtype"; ?></td>
						<td><?php echo "$rake"; ?></td>
						<td><?php echo "$trail"; ?></td>
						<td><?php echo "$axletocrown"; ?></td>
						<td><?php echo "$axlespaceing"; ?></td>
						<td><?php echo "$fwheelsize"; ?></td>
						<td><?php echo "$rwheelsize"; ?></td>
						<td><?php echo "$tiremaxwidth"; ?></td>
						<td><?php echo "$handlebarwidth"; ?></td>
						<td><?php echo "$stemlength"; ?></td>
						<td><?php echo "$stemangle"; ?></td>
						<td><?php echo "$cranklength"; ?></td>
						<td><?php echo "$ftravel"; ?></td>
						<td><?php echo "$rtravel"; ?></td>
						<td><?php echo "$shocksize"; ?></td>
						<td><?php echo "$weight"; ?></td>
					</tr>
	
		<?php
			
				}
				#echo $pid;
				}
			echo "</table>";
		?>		
			<p id='cv' onclick='closer()'>Close</p>
		</div>
	<?php
	}
					#if (!mysqli_query($con, $sql)) {
					#	echo "Error: " . $sql . "<br>" . mysqli_error($con);
					#} else {
						//header('Location: added.html');
					#}
				
				#mysqli_close($con);
	
	?>
