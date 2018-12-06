<?php
ob_start();
	include("conex.inc");
	$Nombre = $_GET["nom"];
	$Apellido = $_GET["ape"];
	$FechaNacimiento = $_GET["fecha"];
	$Email = $_GET["email"];
	$Telefono = $_GET["fono"];
	$Password = $_GET["pass"];

	$Insert = "INSERT INTO `prueba`(`Nombre`, `Apellido`, `FechadeNacimiento`, `email`, `Telefono`, `Pass`) VALUES ('$Nombre', '$Apellido', '$FechaNacimiento', '$Email','$Telefono','$Password')";

	$Agregar = mysqli_query($db, $Insert);

	if ($Agregar) {
			echo "<br>perfil almacenado. <br />";
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}

	#header("Location: index.html");
	
?>
