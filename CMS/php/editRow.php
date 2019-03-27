<?php 
	require 'settings.php';

	session_start();
	
	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']){
		$table = $_POST["table"];
		$old_data = $_POST["old_data"];
		$new_data = $_POST["new_data"];
		$sql = "UPDATE ".$table." SET ";
		$i=0;
		foreach($new_data as $key => $value){
			$sql .= $key."='".$value."'";
			if($i!=(sizeof($new_data)-1))
				$sql .= ", ";
			$i++;
		}
		$sql .= " WHERE ";
		$j=0;
		foreach($old_data as $key => $value){
			$sql .= $key."='".$value."'";
			if($j!=(sizeof($old_data)-1))
				$sql .= "AND ";
			$j++;
		}
		$result = $database->query($sql);
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