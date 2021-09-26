<?php
	$q1 = mysql_query(
			"select * from friend where
			u_id_from in ('$sesusr')
			and request_status = 0"
		);
	if ($q1) {
		$cnt = mysql_num_rows($q1);

?>
	<div class="col-lg-12 topic">
		<a>Sended Requests</a> <span class="badge"><?php echo($cnt); ?></span>
	</div>
<?php
		while ($row1 = mysql_fetch_array($q1)) {
			$row	= mysql_fetch_array ( 
						mysql_query(
							"select * from user
							where u_id = '".$row1[2]."'"
						)
					);
?>
		<div class="col-lg-12 box">
			<img src="img/2.png" class="img-circle chat-img" style="float: left" />
			<div class="col-lg-8">
				<a href="profile.php?to=<?php echo $row[0]; ?>">
					<?php echo $row[1]." ".$row[2]; ?>
				</a>
			</div>
			<div class="col-sm-8">
				<form role="form" method="post" action="#">
					<input type="submit" name="cancle"
						value="Cancle Request" class="btn btn-default form-control" />
					<input type="hidden" name="to" value="<?php echo $row[0];?>" />
				</form>
			</div>
		</div>
<?php
		}
	}
?>
