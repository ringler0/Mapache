<?php
	$host = "localhost";
	$usuario = "mapachep_mant";
	$pass = "Chupapi123";
	$db = "mapachep_prueba";

	$db = mysqli_connect($host,$usuario,$pass,$db);
	if(!$db){
		echo "<br>Error en la conexión";
	}
?>