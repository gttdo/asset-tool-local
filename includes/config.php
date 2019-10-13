<?php

	ob_start();
	session_start(); // enables the use of sessions.

	$timezone = date_default_timezone_set("America/Los_Angeles");
  $con = mysqli_connect("localhost", "root", "root", "asset_tool");

	$conMessage = "Asset Tool database successfully connected to the front end!";

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
		throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
	}
	else {
		//echo $conMessage;
	}
?>
