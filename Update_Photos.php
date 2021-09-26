<?php
	$page = "update_profile";
	include_once("Top_Part.php");
	include_once("connect.php");
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="row padding text-center">
	<div class="log-width white left-div">
		<h3>Update Photos</h3><hr>
		<form role="form" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="pwd">Upload Profile Photo</label>
				<input type="file" name="pp"
					class="form-control" id="profile-photo"/>
			</div>
			<div class="form-group">
				<label for="pwd">Upload Cover Photo</label>
				<input type="file" name="cp"
					class="form-control" id="cover-photo"/>
			</div>
			<hr>
			<input type="submit" name="sub" value="Upload" class="btn btn-default margin-btm" />
			<br>
			<?php
				if (isset ($_POST["sub"])){
					$pp_dir = "pp/";
					$cp_dir = "cp/";
					
					$fp	= $_FILES["pp"];
					$fc	= $_FILES["cp"];
					
					$cnm	= $fc["name"];
					$ctyp	= $fc["type"];
					$ctmp	= $fc["tmp_name"];
					$csz	= $fc["size"];
					$a	= explode(".", $cnm);
					$cext	= end($a);
					
					$pnm	= $fp["name"];
					$ptyp	= $fp["type"];
					$ptmp	= $fp["tmp_name"];
					$psz	= $fp["size"];
					$a	= explode(".", $pnm);
					$pext	= end($a);
					
					if (move_uploaded_file($ctmp, $cp_dir.$cnm)) {
						if (move_uploaded_file($ptmp, $pp_dir.$pnm)) {
							if (
								mysql_query(
									"insert into photos values
										('','$sesusr','profile','$pp_dir$pnm','$tm','')
									"
								)
							) {
								if (
									mysql_query(
										"insert into photos values
											('','$sesusr','cover','$cp_dir$cnm','$tm','')
										"
									)
								) {
									header("location:Update_Profile.php");
								}
							}
						}
 					}
					else {
        					echo "Sorry, there was an error uploading your file.<br>".mysql_error();
    					}
				}
			?>
		</form>
	</div>
</div>

<?php
	include_once("Bottom_Part.php");
?>
