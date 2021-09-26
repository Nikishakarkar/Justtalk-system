			<div class="col-lg-12" style="border-left:2px solid blue; margin-left:4px;margin-bottom:4px;">
				<a>Suggested Friends</a>
			</div>
			<?php
			$res = mysql_query(
					"select * from user where
					u_id not in ('$sesusr')
					and u_id not in (
						select u_id_from from friend where u_id_to = '$sesusr'
						union
						select u_id_to from friend where u_id_from = '$sesusr'
					)"
				);
			while ($row = mysql_fetch_array($res)) {
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
						<input type="submit" name="send"
							value="Send Request" class="btn btn-default form-control" />
						<input type="hidden" name="to" value="<?php echo $row[0];?>" />
					</form>
				</div>
			</div>
			<?php
			}
			?>