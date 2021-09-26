<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "justtalk";
	mysql_connect($servername, $username, $password);
	mysql_select_db($database);
	if (mysql_error()) {
		die("Connection failed: " . $conn->connect_error);
	}
	session_start();
	if ( isset ( $_SESSION["user"] ) ) {
		$sesusr = $_SESSION["user"];
	}
	if ( ( $page == "index" || $page == "registration" || $page == "fp") ) {
		if ( isset($sesusr) )
			header ("location:Home.php");
	}
	if ( ( $page != "index" && $page != "registration" && $page != "fp") )  {
		if ( !isset($sesusr) )
			header ("location:index.php");
	}
	$t = time();
	$tm = date("d-m-Y h:i:s a", $t);
?>