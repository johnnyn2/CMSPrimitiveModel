<?php 
	require 'settings.php';

	session_start();
	
	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']){
		$table = $_POST["table"];
		$old_data = $_POST["old_data"];
		$sql = "DELETE FROM ".$table." WHERE ";
		$j=0;
		foreach($old_data as $key => $value){
			if($value){
				$sql .= $key."='".$value."' AND ";
			}
			$j++;
		}
		$sql = rtrim($sql, ' AND ');
		$result = $database->query($sql);
		echo $sql;
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