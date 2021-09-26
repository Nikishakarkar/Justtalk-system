<?php
	$page = "profile";
	include_once("header.php");

	if (isset($_GET["to"])) {
		$to = $_GET["to"];
		$not_me = 1;
	}
	else if (isset($_POST["to"])){
		$to = $_POST["to"];
		$not_me = 1;
	}
	else{
		$to = $sesusr;
		$not_me = 0;
	}

	if (isset($_POST["sub"])) {
		if ($_POST["sub"] == "Send Friend Request") {
			$rs = mysql_query("insert into friend values ('', '$sesusr', '$to', 'friend', '', '$tm', '')");
			if ($rs) {
				echo("Insert Successful");
			}
		}
		else if ($_POST["sub"] == "Message") {
			header("location:message.php?to=$to");
		}
	}

	$rs	= mysql_query ("select * from user where u_id = '$to'");
	$row	= mysql_fetch_array ($rs);
	$rscp	= mysql_query("select * from photos where u_id = '$row[0]' AND p_type='cover' order by p_time desc");
	$rowcp	= mysql_fetch_array ($rs);
	$rspp	= mysql_query("select * from photos where u_id = '$row[0]' AND p_type='profile' order by p_time desc");
	$rowpp	= mysql_fetch_array ($rs);
?>
<!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">-->
<div class="row height100">
	<div class="in white left-div text-left">
		<div class="col-sm-4 height100" >
			<div class="row">	
<?php			
			if ($rowpp != '') {
?>			
				<img src="<?php echo $rowpp; ?>" class="img-rounded col-lg-3 dp" id="ppimg" />
<?php			
			}
			else {
?>
				<img src="images/babu.png" alt="Photo is not Uploaded" class="img-rounded col-lg-3 dp" id="ppimg" />
<?php
			}
?>			
<?php			
			if ($rowcp != '') {
?>			
				<img src="<?php echo $rowcp; ?>" class="img-rounded col-lg-8 dp" id="cpimg" />
<?php			
			}
			else {
?>
				<img src="images/beauty.jpg" alt="Photo is not Uploaded" class="img-rounded col-lg-8 dp" id="cpimg" />
<?php			
			}
?>			
			</div>
			<div class="row">
				<form role="form" method="post" action="#">
					<div class="form-group">
					<?php
					if ($sesusr != $to) {
						$rs = mysql_query	("
									select * from friend where
									(u_id_from = '$sesusr' and u_id_to = '$to')
									or
									(u_id_to = '$sesusr' and u_id_from = '$to')
									");
						if (mysql_num_rows($rs) > 0){
							echo('<input type="submit" name="sub" value="Message" class="btn-default" />');
						}
						else{
							echo('<input type="submit" name="sub" value="Send Friend Request" class="btn-default" />');
						}
					}
					?>
					</div>
				</form>
			</div>
			<div class="row">
				<span class="col-lg-12"><?php echo $row[1]." ".$row[2]; ?></span>
			</div>
			<div class="row">
				<span class="col-lg-12"><?php echo $row[9]; ?></span>
			</div>
			<div class="row">
				<table class="table ">
				<tbody>
					<tr>
						<td width=30%>Gender</td>
						<td width=70%><?php if ($row[5] == 'M') echo "Male"; else echo "Female"; ?></td>
					</tr>
					<tr>
						<td>Birth Date</td>
						<td><?php echo $row[4]; ?></td>
					</tr>
					<tr>
						<td>Current City</td>
						<td><?php echo $row[7]; ?></td>
					</tr>
					<tr>
						<td>Home Town</td>
						<td><?php echo $row[6]; ?></td>
					</tr>
					<tr>
						<td>Marital Status</td>
						<td><?php echo $row[8]; ?></td>
					</tr>
				</tbody>
				</table>
			</div>
			<div class="col-lg-6"><a href="Update_Photos.php"><button>Upload Photos</button></a></div>
			<div class="col-lg-6"><a href="Update_Profile.php"><button>Update Information</button></a></div>
		</div>	
		<div class="col-lg-8 scrl style-1 text-left">
			<div class="col-lg-12">
				<h4 style="margin: 0px ">Photo of <?php if ($not_me == 0) echo"You"; else echo $row[1]; ?></h4>
			</div>
			<img src="IMG/IMG_20170303_141836.jpg" class="img-rounded col-lg-3 ph height100"/>
			<img src="img/IMG_20170225_162753.jpg" class="img-rounded col-lg-4 ph" />
			<img src="img/IMG_20170225_163523.jpg" class="img-rounded col-lg-4 ph" />
			<img src="img/IMG_20170225_164510.jpg" class="img-rounded col-lg-5 ph" />
			<img src="img/IMG_20161230_233927_419.jpg" class="img-rounded col-lg-3 ph" />
		</div>
	</div>
</div>

<?php
	include_once("footer.php");
?>
