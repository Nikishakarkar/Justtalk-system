<?php
	$page = "registration";
	include_once("Top_Part.php");
	include_once("Connect.php");
	function R () {
		$num = (rand()*1000)%999999;
		echo($num."<br>");
		if ($num > 100000)
			return($num);
		else
			return(R());
	}
?>

<div class="row padding text-center">
	<div class="log-width white left-div">
		<h3>Sign-Up</h3><hr>
		<form role="form" action="#" method="post" name="frmreg">
			<div class="form-group">
				<input type="text" name="fnm" 
					   placeholder="First Name" 
					   class="form-control" id="fnm" required />
			</div>
			<div class="form-group">
				<input type="text" name="lnm" 
					   placeholder="Last Name" 
					   class="form-control" id="lnm" required />
			</div>
			<div class="form-group">
				<input type="email" name="eml"
					   placeholder="Email ID"
					   class="form-control" id="eml" required />
			</div>
			<div class="form-group">
				<input type="password" name="pwd"
					   placeholder="Password"
					   class="form-control" id="pwd" required />
			</div>
			<div class="form-group">
				<input type="password" name="cpwd"
					   placeholder="Confirm Password"
					   class="form-control" id="cpwd" required />
			</div>
			<div class="form-group">
				<select class="form-control" name="gnd" id="gnd" required>
					<option value="">Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
			</div>
			<hr>
			<input type="submit" name="sub" value="Submit" class="btn btn-default margin-btm" />
		</form>
			<span id="Message">
			<?php
				if ( isset ( $_POST["sub"] ) ) {
					$fnm	= $_POST["fnm"];
					$lnm	= $_POST["lnm"];
					$eml	= $_POST["eml"];
					$pwd	= $_POST["pwd"];
					$cpwd	= $_POST["cpwd"];
					$gnd	= $_POST["gnd"];
					
					if ( $fnm !== '' && $lnm !== '' && $eml !== '' && $pwd !== '' && $cpwd !== '' && $gnd !== '' ) {
						if ( $pwd != $cpwd ) {
							echo("Passwords are not Matching");
						}
						else {
							$query	= mysql_query (
										"insert into user values
										('".$eml."', '".$fnm."', '".$lnm."',
										'".$pwd."', '', '".$gnd."', '', '',
										'', '', '$tm', '')"
									);
							if ($query) {
								$rnd	= R();
								$query	= mysql_query("insert into OTP values ('".$eml."','".$rnd."','".$tm."')");
								if ($query) {
									echo "Registration Successful";
									$_SESSION["user"] = $eml;
									header ("location:Update_Profile.php");
								}
								else {
									echo(mysql_errno());
								}
							}
							else if (mysql_errno() == 1062)  {
								echo("The email id is already registered" );
							}
						}
					}
					else {
						if ( $fnm == '' )
							echo("Full Name");
						if ( $lnm !== '' )
							echo(" Last Name");
						if ( $eml !== '' )
							echo(" Email");
						if ( $pwd !== '' )
							echo(" Password");
						if ( $cpwd !== '' )
							echo(" Confirm Password");
						if ( $gnd !== '' )
							echo(" Gender");
						echo(" Field Empty");
					}
				}
			?>	
			</span>
	</div>
</div>
<div class="row text-center"> 
	Have An Account?<br>
	<a href="index.php">Log in now!</a>
</div>   

<?php
	include_once("Bottom_Part.php");
?>