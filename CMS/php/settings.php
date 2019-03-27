<?php
	$server = ""; //server e.g. localhost
	$username = ""; //database account
	$password = ""; //database password
	$dbname = ""; //database name
	$database = new mysqli($server, $username, $password, $dbname);
		if($database->connect_error)
			die("Fail to connect!".$database->connect_error);
	header('Content-type: application/json');
?>