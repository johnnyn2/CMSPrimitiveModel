<?php 
	require 'settings.php';
	session_start();
	if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']){
		
		$sql = "show tables";
		$result = $database->query($sql);
		$tables;
		$i=0;
		while($row = $result->fetch_array()){
			$tables[$i] = $row[0];
			$i++;
		}
		echo json_encode($tables);
	}else{
		echo json_encode("notLoggedIn");
	}
?>