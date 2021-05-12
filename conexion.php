<?php 

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db	= 'usuarios';

	$conection = @mysqli_connect($host,$user,$password,$db);
  
	if(!$conection) {
		echo "Error de la conexion";
	}

 ?>