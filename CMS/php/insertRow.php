<?php 
	require 'settings.php';

	session_start();
	
	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']){
		$table = $_POST["table"];
		$data = $_POST["data"];
		$sql = "INSERT INTO ".$table." VALUES (";
		foreach($data as $key => $value){
			$sql .= $value.", ";
		}
		$sql = rtrim($sql, ", ");
		$sql .= ")";
		$database->query($sql);
		if($database->affected_rows>0){
			echo json_encode("true");
		}
		else{
			echo json_encode("false");
		}
	}else{
		echo json_encode("notLoggedIn");
	}
?>