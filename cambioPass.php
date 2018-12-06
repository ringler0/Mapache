<?php
include("conex.inc");
	$Email = $_GET["email"];
	$Password = $_GET["pass"];

	$consulta = "UPDATE prueba SET Pass = '$Password' WHERE email= '$Email'";
	$respuesta = mysqli_query($db, $consulta);

	if ($respuesta) {
		echo "Cambio de clave realizado";
	}
?>