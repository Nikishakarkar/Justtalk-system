<?php
	$page = "message";
	include_once("header.php");
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="row height100">
	<div class="in white left-div">
		<div class="col-lg-7 height100 scrl style-1">
			<?php include_once ("Search_Friends.php"); ?>
		</div>
		<div class="col-lg-5 height100 scrl style-1">
			<?php include_once ("All_Messages1.php"); ?>
		</div>
	</div>
</div>
<?php
	include_once("footer.php");
?>