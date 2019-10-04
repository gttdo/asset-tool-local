<?php

	ob_start();
	session_start(); // enables the use of sessions.

	$timezone = date_default_timezone_set("America/Los_Angeles");
  //$con = mysqli_connect("localhost", "root", "root", "asset_tool");

	//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db       = substr($cleardb_url["path"],1);


$active_group = 'default';
$query_builder = TRUE;

$con['default'] = array(
    'dsn'    => '',
    'hostname' => $cleardb_server,
    'username' => $cleardb_username,
    'password' => $cleardb_password,
    'database' => $cleardb_db,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    // 'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

	$conMessage = "Asset Tool database successfully connected to the front end!";

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
		throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
	}
	else {
		echo $conMessage;
	}
?>
