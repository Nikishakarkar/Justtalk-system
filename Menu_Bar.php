<div class="row text-center">
	<ul class="nav nav-pills text-center">
		<li <?php if ($page == "home") {?>class="active"<?php } ?>>
			<a href="Home.php">Home</a>
		</li>
		<li <?php if ($page == "message") {?>class="active"<?php } ?>>
			<a href="All_Messages.php">Message</a>
		</li>
		<li <?php if ($page == "profile") {?>class="active"<?php } ?>>
			<a href="Profile.php">Profile</a>
		</li>
		<li <?php if ($page == "find_friend") {?>class="active"<?php } ?>>
			<a href="Find_Friends.php">Find Friend</a>
		</li>
		<li><a href="Logout.php">Logout (<?php echo($sesusr); ?>)</a></li>
	</ul>
</div>
