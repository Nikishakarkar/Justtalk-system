<?php
	$page = "fp";
	include_once("Top_Part.php");
?>

<div class="row padding text-center">
	<div class="log-width white left-div">
		<h3>Forgot Your Password?</h3><hr>
		<form role="form">
			<div class="form-group">
				<input type="email"name="lem" 
					   placeholder="Email ID"
					   class="form-control" id="l-email-id">
			</div>
			<div class="checkbox">
				Enter the email address you used to sign up and we will reset your JusT-TalK account password.
			</div>
			<hr>
			<input type="submit" name="log" value="Send Mail" class="btn btn-default margin-btm" />
		</form>
	</div>
</div>
<div class="row text-center"> 
	<a href="Registration.php">Sign up</a> or
	<a href="index.php">Log in</a>
</div>

<?php
	include_once("Bottom_Part.php");
?>
