			<div class="container-fluid" >
			<?php
			$res =	mysql_query	(
						"select distinct(u_id_to) from message where u_id_from = '".$sesusr."' union
						select distinct(u_id_from) from message where u_id_to = '".$sesusr."'"
						);
			if ( $res ) {
				if ( mysql_num_rows ( $res ) > 0 ) {
					while ( $row1 = mysql_fetch_array ( $res ) ) {
						$q		= mysql_query("	select * from user where u_id = '".$row1[0]."'");
						$row	= mysql_fetch_array ( $q );
						$msg	= mysql_fetch_array ( 
										mysql_query(
											"select * from message where
											(u_id_from = '".$sesusr."' and u_id_to = '".$row[0]."') or
											(u_id_from = '".$row[0]."' and u_id_to = '".$sesusr."')
											order by m_sent_time desc"
										)
									);
			?>
				<a href="Message.php?to=<?php echo $row[0]; ?>">
				<div class="col-lg-12 box">
					<img src="img/2.png" class="img-circle chat-img" style="float: left" />
					<div class="col-lg-5">
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
			}
			?>
			</div>
