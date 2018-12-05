<?php
	session_start();
	include("conex.inc");
	$Email = $_POST["email"];
	$Password = $_POST["pass"];

	$consulta = "SELECT 'Nombre' ,`email`, `Password` FROM `prueba` WHERE 'email'= '$Email' AND 'Password' = '$Password' ";
	$respuesta = mysqli_query($db, $consulta);

	$fila = mysqli_fetch_object($respuesta);
	$user = $fila->Nombre;
	if ($fila->email == $$Email && $fila->Password == $Password) {
		$_SESSION["estado"] = "conectado";
		$_SESSION["nombre"] = $user;

		header("Location:index..php?conect=Bienvenido +$user");
	}

	if ($fila->email != $Email || $fila->Password != $Password) {
		header("Location: login.php?error=Usuario+o+Clave+erronea");
	}

?>