<?php 
	require 'settings.php';
	session_start();
	$table = array();
	$cols = array();
	
	$sql = "SHOW columns FROM ".$_POST['table'];
	$result = $database->query($sql);
	while($col = $result->fetch_array()){
		array_push($cols, $col['Field']);
	}
	array_push($table, $cols);
	
	$sql = "SELECT * FROM ".$_POST['table'];
	$result = $database->query($sql);
	while($row = $result->fetch_assoc()){
		array_push($table, $row);
	}
	echo json_encode($table);
?>