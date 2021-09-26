<?php
	$page = "index";
	include_once("Top_Part.php");
?>

<div class="row padding text-center">
	<div class="log-width white left-div">
		<h3>Login</h3><hr>
		<form role="form" action="#" method="post">
			<div class="form-group">
				<input	type		= "email"
					name		= "eml" 
					placeholder	= "Email ID"
					class		= "form-control"
					id		= "l-email-id"
					autofocus	/>
			</div>
			<div class="form-group">
				<input	type		= "password"
					name		= "pwd"
					placeholder	= "Password" 
					class		= "form-control"
					id		= "l-password"	/>
			</div>
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
			<hr>
			<input type="submit" name="sub" value="Login" class="btn btn-default margin-btm" />
			<br>
			<?php
				if (isset ($_POST["sub"])){
					$eml=$_POST["eml"];
					$pwd=$_POST["pwd"];
					if ($eml !== '' && $pwd !== '') {
						$query	= mysql_query ( "select * from user where u_id='".$eml."'" );
						$row	= mysql_fetch_array ( $query );
						if ($row["u_password"] == $pwd) {
							echo "Login successful";
							$_SESSION["user"] = $eml;
							header("location:Home.php");
						}
						else {
							echo "Email ID or Password is Wrong";
						}
					}
					else {
						echo "Email ID or Password is Empty";
					}
				}
			?>
			<div class="margin-btm"><a href="Forgot_Password.php">Forgot Password</a></div>
		</form>
	</div>
</div>

<div class="row text-center"> 
	Not registered yet?<br>
	<a href="Registration.php">Sign up now!</a>
</div>   

<?php
	include_once("Bottom_Part.php");
?>
