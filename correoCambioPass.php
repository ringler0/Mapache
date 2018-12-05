<?php
ob_start();
include("conex.inc");
	$Email = $_GET["email"];

	$consulta = "SELECT 'email' FROM prueba WHERE email= '$Email' ";
	$respuesta = mysqli_query($db, $consulta);

	$fila = mysqli_fetch_object($respuesta);
	$correo= $fila->email;
	if ($Email == $correo) {
		$mensaje = "<h2>Gracias por registrarte $Nombre</h2>
		<p>Wena ctm compare $Apellido</p><br>
		<p>Para completar su registro haga click <a href='http://prueba.mapacheproducciones.cl/datos.php?email=$Email>Aqui</a></p>";
		$asunto = "Cambio de Contraseña";
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers .= "From: Mapache Producciones <mantenimiento@mapacheproducciones.cl>\r\n";
		
		$envio = mail($Email,$asunto,$mensaje,$headers);
			echo "Su e-mail se a enviado correctamente.";
	}else{
		header("Location:nuevaPass.php?error=No+existe+este+correo");
	}
?>