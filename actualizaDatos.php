<?php
session_start();
include("conex.inc");

	$emailp = $_SESSION["email"];

	$Email = $_POST["email"];
	$Nombre = $_POST["name"];
	$Apellido = $_POST["ape"];
	$Numero = $_POST["num"];

	$consulta = "UPDATE prueba SET Nombre = '$Nombre', Apellido = '$Apellido', email = '$Email', Telefono = '$Numero' WHERE email= '$emailp'";
	$respuesta = mysqli_query($db, $consulta);

	if ($respuesta) {
		$_SESSION["nombre"] = $Nombre;
		$_SESSION["apellido"] = $Apellido;
		$_SESSION["email"] = $Email;
		$_SESSION["numero"] = $Numero;
		$correo = $Email;
		$mensaje = "<h2>Se han actualizado tus datos correctamente</h2>
			<h4>Tus nuevos datos son: </h4>
			<p>Nombre: $Nombre</p>
			<p>Apellido: $Apellido</p>
			<p>Email: $Email</p>
			<p>Numero de Telefono:+569 $Numero</p>";
		$asunto = "Actualizacion de Datos";
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers .= "From: Mapache Producciones <mantenimiento@mapacheproducciones.cl>\r\n";
		$envio = mail($Email,$asunto,$mensaje,$headers);
		header("Location:perfil.php?enviado=Se+han+actualizado+sus+datos");
	}

?>