<?php
	$page = "message";
	include_once("header.php");
?>
<?php
	if (isset($_POST["repid"]))
		$to = $_POST["repid"];
	if (!isset($_POST["repid"]) && !isset($_POST["sub"]))
		header("location:home.php");

	if (isset($_POST["sub"])){
		$dir	= "report/";
		$f		= $_FILES["file1"];
		$nm		= $f["name"];
		$tmp	= $f["tmp_name"];
		$to		= $_POST["to"];
		$desc	= $_POST["desc"];
		
		if (move_uploaded_file($tmp, $dir.$nm)) {
			if (
				mysql_query(
					"insert into report values
						('', '$sesusr', '$to', '$dir$nm', '$desc', '$tm', '')
					"
				)
			) {
				
			}
			else {
			}
		}
	}
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="row height100">
	<div class="in white left-div text-center">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
		<form role="form" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="pwd">Upload Photo (can help us to understand the mater)</label>
				<input type="file" name="file1" class="form-control" id="profile-photo"/>
			</div>
			<div class="form-group">
				<label for="pwd">Desctiption</label>
				<textarea name="desc" class="form-control" id="desctiption"></textarea>
			</div>
			<input type="hidden" value="<?php echo $to; ?>" name="to" />
			<input type="submit" value="Report" name="sub" class="btn btn-warning" />
		</form>
		</div>
	</div>
</div />

<?php
include_once("footer.php");
?>