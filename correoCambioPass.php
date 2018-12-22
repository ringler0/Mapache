<?php
ob_start();
include("conex.inc");
	$Email = $_GET["email"];

	$consulta = "SELECT * FROM prueba WHERE email= '$Email' ";
	$respuesta = mysqli_query($db, $consulta);

	$fila = mysqli_fetch_object($respuesta);
	$Nombre = $fila->Nombre;
	$correo= $fila->email;
	if ($Email == $correo) {
		$mensaje = "<h2>Solicitaste un cambio de contraseña $Nombre</h2>
		<p>Para ingresar una nueva contraseña haga click <a href='http://prueba.mapacheproducciones.cl/ingresoNuevaPass.php?correo=$Email'>Aqui</a></p>";
		$asunto = "Cambio de Contraseña";
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers .= "From: Mapache Producciones <mantenimiento@mapacheproducciones.cl>\r\n";
		
		$envio = mail($Email,$asunto,$mensaje,$headers);
			echo "Hemos enviado un correo a su e-mail para cambiar su contraseña";
			header("Location:nuevaPass.php?enviado=Se+ha+enviado+un+email+de+confirmacion+para+completar+su+cambio+de+clave");
	}else{
		header("Location:nuevaPass.php?error=No+existe+este+correo");
	}
?>