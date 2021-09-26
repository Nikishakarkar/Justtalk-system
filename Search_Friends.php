			<div class="col-lg-12 box">
				<form role="form" action="#" method="get" class="form-inline">
					<div class="form-group">
						<input type="search" name="search" style="width: 575px"
							placeholder="Enter Name of Friend to Search"
							class="form-control" />
						<input type="submit" class="btn btn-default" value="S" name="sub" style="color:blue;" />
					</div>
				</form>
			</div>
			<?php
				if ( isset ( $_GET["sub"] ) ) {
					$s	= $_GET["search"];
					$res	= mysql_query (
								"select * from user where
								(u_id like '%$s%' or u_first_name like '%$s%' or u_last_name like '%$s%')
								and
								u_id in (
									select u_id_to from friend where
									u_id_from = '$sesusr' and request_status = 1
									union
									select u_id_from from friend where
									u_id_to = '$sesusr' and request_status = 1
								)"
							) or die (mysql_error());
					if (mysql_num_rows($res)) {
						while ($row = mysql_fetch_array($res)) {
?>
					<div class="col-sm-12 box">
						<a href="Message.php?to=<?php echo $row[0]; ?>">
						<div class="col-lg-3 box">
							<img src="img/2.png" class="img-circle chat-img" style="float: left" />
							<div class="col-lg-7">
								<?php echo $row[1]." ".$row[2]; ?>
							</div>
						</div>
						</a>
					</div>
<?php
						}
					}
					else
						echo('<div class="col-sm-12 text-center">
									<h4>No Record Found</h4>
							</div>');
				}
				else
					echo('<div class="col-sm-12 text-center">
								<h4>Find Your Friends Here</h4>
						</div>');
?>
