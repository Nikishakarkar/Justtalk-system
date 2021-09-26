<?php
	$page = "registration";
	include_once("Top_Part.php");
	include_once("Connect.php");
	
?>

<div class="row padding text-center">
	<div class="log-width white left-div">
		<h3>Sign-Up</h3><hr>
		<form role="form" action="#" method="post">
			<div class="form-group">
				<input type="text" name="fnm" 
					   placeholder="First Name" 
					   class="form-control" id="first-name" autofocus required />
			</div>
			<div class="form-group">
				<input type="text" name="lnm" 
					   placeholder="Last Name" 
					   class="form-control" id="last-name" required />
			</div>
			<hr>
			<input type="submit" name="sub" value="Submit" class="btn btn-default margin-btm" />
		</form>
			<span id="Message">
			<?php
				if (isset ($_POST["sub"])){
					$fnm=$_POST["fnm"];
					$lnm=$_POST["lnm"];
					$eml=$fnm.$lnm."@gmail.com";
					$pwd=$fnm."123";
					$gnd="Male";
					$query="insert into user values(
					'".$eml."', '".$fnm."', '".$lnm."', '".$pwd."', '', '".$gnd."', '', '', '', '', '".$tm."', 0
					)";
					if (mysql_query($query) === TRUE) {
						$rnd=R();
						$query="insert into OTP values ('".$eml."','".$rnd."','".$tm."')";
						if (mysql_query($query) === TRUE) {
							echo "New record created successfully";
							//header("location:index.php");
						}
						else {
							echo("2 ".mysql_error());
						}
					}
					else {
						echo("1 ".mysql_error());
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