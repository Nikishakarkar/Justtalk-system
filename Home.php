<?php
	$page = "home";
	include_once("header.php");
	
	if (isset ($_POST["sub"])) {
		$from = $_POST["from"];
		if ($_POST["sub"] == "Accept") {
			
			if ( mysql_query(
					"update friend set request_status = 1 where
					u_id_from = '$from' and u_id_to = '$sesusr'
					and request_status = 0"
				) ) {
				echo("<script>alert('Request Accepted');</script>");
			}
			else {
				echo("<script>alert('Request Failed');</script>");
			}
		}
	}
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="row height100">
	<div class="in white left-div">
		<div class="col-sm-9 height100 scrl style-1">
			
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12">
				<?php include_once ("New_Messages.php"); ?>
			</div>
			<div class="col-sm-12">
				<?php include_once ("Received_Requests.php"); ?>
			</div>
			<div class="col-lg-12">
				<?php include_once ("Display_Friends.php"); ?>
			</div>
		</div>
		
	</div>
</div>
        <script>
			$("#new_message").click(function () {
				$("#message_new").toggle(500);
			});
			$("#rec_req").click(function () {
				$("#req_rec").toggle(500);
			});
			$("#fri").click(function () {
				$("#fri_").toggle(500);
			});
			
		</script>

<?php
	include_once("footer.php");
?>