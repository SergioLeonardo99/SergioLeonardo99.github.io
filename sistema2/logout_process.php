<?php
	session_start();
	if(isset($_GET['logout'])) {
		unset ($_SESSION['id']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		
	header('location:../sistema/index.php');
	
	} else {
		echo mysqli_error();
	}
?>