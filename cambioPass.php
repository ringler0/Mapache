<?php
include("conex.inc");
	$Email = $_GET["email"];
	$Password = $_GET["pass"];

	$consulta = "UPDATE 'prueba' SET 'Password' = '$Password' WHERE 'email'= '$Email'";
	$respuesta = mysqli_query($db, $consulta);

	header("Location: login.php");
?>