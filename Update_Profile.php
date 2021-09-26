<?php
	$page = "update_profile";
	include_once("Top_Part.php");
	include_once("connect.php");
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="row padding text-center">
	<div class="log-width white left-div">
		<h3>Update Info</h3><hr>
		<form role="form" action="#" method="post" enctype="multipart/form-data">
				<div class="container-fluid frm" style="padding: 0px; padding-top: 2px; height: 36px;">
					Birth Date
					<select name="dd" class="frm">
						<option value="">DD</option>
						<?php
							for ($i = 1;$i <= 31;$i ++) {
								echo "<option value='$i'>$i</option>";
							}
						?>
					</select>
					<select name="mm" class="frm">
						<option value="">MON</option>
						<?php
							$a = array ( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
							for ($i = 0;$i <= 11;$i ++) {
								echo "<option value='".$a[$i]."'>".$a[$i]."</option>";
							}
						?>
					</select>
					<select name="yy" class="frm">
						<option value="">YYYY</option>
						<?php
							for ($i = 1900;$i <= 2017;$i ++) {
								echo "<option value='$i'>$i</option>";
							}
						?>
					</select>
				</div>
			<div class="form-group">
				<input type="text" name="hmt"
					   placeholder="Home Town" 
					   class="form-control" id="home-town">
			</div>
			<div class="form-group">
				<input type="text" name="cct"
					   placeholder="Current City" 
					   class="form-control" id="current-city">
			</div>
			<div class="form-group">
				<input type="text" name="mst"
					   placeholder="Marital Status" 
					   class="form-control" id="marital-status">
			</div>
			<div class="form-group">
				<input type="text" name="abt"
					   placeholder="Description About You"
					   class="form-control" id="about">
			</div>
			<hr>
			<input type="submit" name="sub" value="Save" class="btn btn-default margin-btm" />
			<input type="submit" name="sub" value="Skip" class="btn btn-default margin-btm" />
			<br>
			<?php
				if (isset ($_POST["sub"])){
					if ($_POST["sub"] == "Save") {
						$bdt	= $_POST['dd']."-".$_POST['mm']."-".$_POST['yy'];
						$hmt	= $_POST["hmt"];
						$cct	= $_POST["cct"];
						$mst	= $_POST["mst"];
						$abt	= $_POST["abt"];
						$query	= mysql_query (
								"update user set
								u_birthdate	='$bdt',
								u_hometown	='$hmt',
								u_current_city	='$cct',
								u_marital_status='$mst',
								u_about		='$abt'
								where u_id	='$sesusr'"
								);

						if ( $query ) {
							header("location:Profile.php");
						}
						else {
							echo (mysql_error());
						}
					}
					else if ($_POST["sub"] == "Skip") {
						header("location:Home.php");
					}
				}
			?>
		</form>
	</div>
</div>

<?php
	include_once("Bottom_Part.php");
?>
