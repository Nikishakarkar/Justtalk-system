<?php
	$q2	= mysql_query (
			"(select u_id_to from friend where
			u_id_from = '$sesusr' and request_status = 1)
			union
			(select u_id_from from friend where
			u_id_to = '$sesusr' and request_status = 1)"
		);
	if ($q2) {
		$cnt = mysql_num_rows($q2);$i=1;
?>
	<div class="col-lg-12 topic" id="fri">
		<a href="Find_Friends.php">
			Your Friends <span class="badge"><?php echo($cnt); ?></span>
		</a>
	</div>
	<div class="col-lg-12 padding0" id="fri_">
<?php	
		if ($cnt == 0) {
?>
		<div class="col-lg-12 message_for_no">
			You haven't any friend
		</div>
<?php
		}
		else{
			while ($row1 = mysql_fetch_array($q2)) {
				if ($i == 5) break;
				$row	= mysql_fetch_array ( 
							mysql_query(
								"select * from user
								where u_id = '".$row1[0]."'"
								)
							);
?>
			<div class="col-lg-12 box">
				<img src="img/2.png" class="img-circle chat-img" style="float: left" />
				<div class="col-lg-8">
					<a href="Message.php?to=<?php echo $row[0]; ?>">
						<?php echo $row[1]." ".$row[2]; ?>
					</a>
				</div>
				<div class="col-sm-8">
					<a href="Message.php?to=<?php echo $row[0]; ?>">
						<input type="submit" name="sub" value="Message" class="btn btn-default" />
					</a>
				</div>
			</div>
<?php
				$i++;
			}
		}
	}
?>