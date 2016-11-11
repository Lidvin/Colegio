<?php
	
	$mysqli = new mysqli("localhost", "root", "", "establecimiento");

	if (mysqli_connect_errno()) {
		echo "Conexión fallida: ".mysqli_connect_errno();
		exit();
	}
?>