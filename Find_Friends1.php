<?php
	$page = "find_friend";
	include_once("header.php");
	
	if (isset($_POST["send"])) {
		$rs = mysql_query("insert into friend values ('', '$sesusr', '".$_POST["to"]."', 'friend', '', '$tm', '')");
		if ($rs) {
			echo("<script>alert ('request sent');</script>");
		}
	}
	if (isset($_POST["cancle"])) {
		$rs = mysql_query("delete from friend where u_id_from = '$sesusr' and u_id_to = '".$_POST["to"]."'");
		if ($rs) {
			echo("<script>alert ('request request');</script>");
		}
	}

?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="row white left-div">
		<div class="col-lg-9">
<?php
		if ( isset ( $_GET["fr"] ) ) {
			if ($_GET["fr"] == "sr") {
				
			}
		}
			
?>
		</div>
		<div class="col-lg-3">
			<div class="col-lg-12">
				<?php include_once ("Search_Other_Friends.php"); ?>
			</div>
			<div class="col-lg-12">
				<?php include_once ("Suggested_Friends.php"); ?>
			</div>
			<div class="col-lg-12">
				<?php include_once ("Sended_Requests.php"); ?>
			</div>
			<div class="col-lg-12">
				<?php $gr=8; include_once ("Display_Friends.php"); ?>
			</div>
		</div>
</div>

<?php
	include_once("footer.php");
?>