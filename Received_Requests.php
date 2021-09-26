<?php
	$q1 = mysql_query (
				"select * from friend where
				u_id_to = '$sesusr' and request_status = 0"
			);
	if ($q1) {
		$cnt = mysql_num_rows($q1);
?>
	<div class="col-lg-12 topic" id="rec_req">
		<a href="Find_Friends.php">
			Received Friend Reqiests <span class="badge"><?php echo($cnt); ?></span>
		</a>
	</div>
	<div class="col-lg-12 padding0" id="req_rec">
<?php
		if ($cnt == 0) {
?>
		<div class="col-lg-12 message_for_no">
			No New Requests
		</div>
<?php
		}
		else{
			while ($row1 = mysql_fetch_array($q1)) {
				$q = mysql_query (
						"select * from user where
						u_id = '".$row1[1]."'"
						);
				$row = mysql_fetch_array($q);
?>
		<div class="col-lg-12 box">
			<img src="img/2.png" class="img-circle chat-img" style="float: left" />
			<div class="col-lg-4">
				<a href="profile.php?to=<?php echo $row[0]; ?>"><?php echo $row[1]." ".$row[2]; ?></a>
			</div>
			<form role="form" method="post" action="#">
				<input type="submit" name="sub" value="Accept"
					class="btn btn-default col-lg-3" />
				<input type="submit" name="sub" value="Delete"
					class="btn btn-danger col-lg-3" />
				<input type="hidden" name="from" value="<?php echo $row[0];?>" />
			</form>
		</div>
<?php
			}
		}
?>
	</div>
<?php
	}
?>