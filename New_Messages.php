<?php
	$res =	mysql_query	(
					"select * from message
					where u_id_to = '".$sesusr."'
					and m_delivered_time = ''
					group by (u_id_from) order by (m_sent_time) desc"
				);

	if ($res) {
		$cnt = mysql_num_rows($res);
?>
		<div class="col-lg-12 topic" id="new_message">
			<a href="All_Messages.php">
				New Messages <span class="badge"><?php echo($cnt); ?></span>
			</a>
		</div>
		<div class="col-lg-12 padding0" id="message_new">
<?php	
		if ($cnt == 0) {
?>
			<div class="col-lg-12 message_for_no">
					No New Messages
			</div>
<?php
		}
		else{
			while ($row1 = mysql_fetch_array($res)) {
				$row	= mysql_fetch_array ( 
									mysql_query(
										"select * from user
										where u_id = '".$row1[1]."'"
									)
								);
				$msg	= mysql_fetch_array ( 
									mysql_query(
										"select * from message where
										(u_id_from = '".$sesusr."'
										and u_id_to = '".$row[0]."')
										or
										(u_id_from = '".$row[0]."'
										and u_id_to = '".$sesusr."')
										order by (m_sent_time) desc"
									)
								);
?>			
			<a href="Message.php?to=<?php echo $row[0]; ?>">
			<div class="col-lg-12 box">
				<img src="img/2.png" class="img-circle chat-img" style="float: left" />
				<div class="col-lg-9">
					<?php echo $row[1]." ".$row[2]; ?><br>
					<?php echo $msg[3]; ?>
					<p class="date"><?php echo $msg[4]; ?></span>
				</div>
				<div class="col-lg-5 date" style="padding: 0px"></div>
			</div>
			</a>
<?php		
			}
		}
		echo("</div>");
	}
?>