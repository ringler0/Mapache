<?php
	session_start();
	include("conex.inc");
	$Email = $_POST["email"];
	$Password = $_POST["pass"];

	$consulta = "SELECT * FROM prueba WHERE email = '$Email' AND Pass = '$Password' ";
	$respuesta = mysqli_query($db, $consulta);

	$fila = mysqli_fetch_object($respuesta);
	$user = $fila->Nombre;
	$apellido = $fila->Apellido;
	$correo = $fila->email;
	$pass = $fila->Pass;
	if ($correo == $Email && $pass == $Password) {
		$_SESSION["estado"] = "conectado";
		$_SESSION["nombre"] = $user;
		$_SESSION["apellido"] = $apellido;
		$_SESSION["email"] = $correo;

		header("Location:index.php");
	}

	if ($correo != $Email || $pass != $Password) {
		header("Location: login.php?error=Usuario+o+Clave+erronea");
	}

?>