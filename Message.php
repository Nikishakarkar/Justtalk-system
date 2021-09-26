<?php
	$page = "message";
	include_once("header.php");
?>
<?php
	if (isset($_GET["to"]))
		$to = $_GET["to"];
	else if (isset($_POST["to"]))
		$to = $_POST["to"];
	
	
	if (
		$res = mysql_query ("
			select * from friend where
			( (u_id_from = '$sesusr' && u_id_to = '$to')
			||
			(u_id_from = '$to' && u_id_to = '$sesusr') )
			&&
			request_status = 1
		")
	) {
		if ( mysql_num_rows ($res) == 0 ) {
			header("location:All_Messages.php");
		}
	}
	
	if (isset($_POST["sub"])) {
		$msg 	= $_POST["msg"];
		$q	= "insert into message values ('','$sesusr','$to','$msg','$tm','','',0,0,0)";
		$res	= mysql_query($q);
		if (!$res) {
			echo "successful";
		}
		else
			echo mysql_error();
	}
?>
<script>
chat.scrollTop = chat.scrollHeight;
</script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="row height100">
	<div class="in white left-div">
		<div class="col-sm-4 height100 chat">
			<div class="row scrl height1 style-1" id="chat">
				<?php
					$res = mysql_query ("
							select m_content, u_id_from, u_id_to from message
							where ( u_id_from = '$sesusr' and u_id_to = '$to' )
							or ( u_id_to = '$sesusr' and u_id_from = '$to' )
							");
					while($row = mysql_fetch_array ($res)) {
						if ($row['u_id_from'] == $sesusr){
							$float = 'right';
						}
						else {
							$float = 'left';
						}
				?>
						<div class="col-sm-12">
							<div style="float:<?php echo $float; ?>">
								<pre><?php echo $row['m_content']; ?></pre>
							</div>
						</div>
				<?php
					}
				?>
			</div>
			<form role="form" class="form-inline" style="padding: 0px" action="#" method="post">
				<div class="form-group">
					<input type="hidden" name="to" value="<?php echo $to; ?>" />
					<textarea name="msg" placeholder="Enter Your Message"
						class="form-control" style="height: 40px; width: 285px" id="message" autofocus required></textarea><div class="form-group">
					<input type="submit" name="sub" value="Send" class="btn btn-default" style="height: 40px;" />
					</div>
				</div>
			</form>
			<form role="form" class="form-inline" style="padding: 0px" action="report.php" method="post">
				<input type="submit" name="rep" value="REPORT THE USER" class="btn btn-warning col-lg-12" />
				<input type="hidden" name="repid" value="<?php echo($to); ?>" />
			</form>
		</div>
	</div>
</div />

<?php
include_once("footer.php");
?>