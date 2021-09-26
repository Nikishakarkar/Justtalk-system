			<div class="col-lg-12 box">
				<form role="form" action="#" method="post" class="form-inline">
					<div class="form-group">
						<input type="search" name="search" placeholder="Search Friend" class="form-control" />
						<input type="submit" class="btn btn-default" value="S" name="sub" style="color:blue;" />
					</div>
				</form>
			</div>
			<?php
			if ( isset ( $_POST["sub"] ) ) {
				$res = mysql_query(
						"select * from user where
						(u_id like '%".$_POST["search"]."%' or
						u_first_name like '%".$_POST["search"]."%' or
						u_last_name like '%".$_POST["search"]."%') and
						u_id not in ('$sesusr')
						"
					);
				while ($row = mysql_fetch_array($res)) {
			?>
			<div class="col-sm-12 box">
				<img src="img/2.png" class="img-circle chat-img" style="float: left" />
				<div class="col-lg-8">
					<a href="profile.php?to=<?php echo $row[0]; ?>">
						<?php echo $row[1]." ".$row[2]; ?>
					</a>
				</div>
				<div class="col-sm-8">
					<form role="form" method="post" action="#">
					
						<input type="submit" name="send"
							value="Send Request" class="btn btn-default form-control" />
						<input type="hidden" name="to" value="<?php echo $row[0];?>" />
					</form>
				</div>
			</div>
			<?php
				}
			}
			?>
