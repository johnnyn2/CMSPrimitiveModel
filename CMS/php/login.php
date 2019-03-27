<?php 
	require 'settings.php';
	session_start();
	if(!isset($_SESSION['isLoggedIn'])){
		if(isset($_POST['account']) && isset($_POST['password'])){
			$ac = $_POST['account'];
			$pw = $_POST['password'];
			$sql = "SELECT * FROM customer WHERE account = '".$ac."' AND password = '".$pw."'";
			$result = $database->query($sql);
			if($result->num_rows>0){
				$_SESSION['isLoggedIn'] = true;
				echo json_encode("isLoggedIn");
			}
			else{
				$_SESSION['loginError'] = true;
				echo json_encode("notLoggedIn");
			}
			$database->close();
		}
	}else{
		echo json_encode("isLoggedIn");
	}
?>