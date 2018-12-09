<?php
include("conex.inc");
	$Email = $_GET["email"];
	$Password = $_GET["pass"];

	$consulta = "UPDATE prueba SET Pass = '$Password' WHERE email= '$Email'";
	$respuesta = mysqli_query($db, $consulta);

	if ($respuesta) {
		header("Location: ingresoNuevaPass.php?enviado=Cambio+de+clave+realizado");
	}
?>