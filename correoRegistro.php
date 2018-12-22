<?php
ob_start();
	include("conex.inc");
	$Nombre = $_POST["nom"];
	$Apellido = $_POST["ape"];
	$FechaNacimiento = $_POST["fecha"];
	$Email = $_POST["email"];
	$Telefono = $_POST["fono"];
	$Password = $_POST["pass"];


	$consulta = "SELECT `email` FROM `prueba`";
	$respuesta = mysqli_query($db,$consulta);
	$verificar = 0;


	while ($fila = mysqli_fetch_object($respuesta)) {
		if ($fila->email == $Email) {
			$verificar = 1;
		}
	}

	$mensaje = "<div style='text-align: center;'>
		<a href='prueba.mapacheproducciones.cl'><img src='LogoMapache.png'></a>
	</div>
	<div style='text-align: center; background-color: #99FFFF; border-radius: 2em;'>
		<h2>Gracias por registrarte en Mapache Producciones</h2>
		<h4>¡Bienvenido ".$Nombre." ".$Apellido."!</h4><br>
		<p>Para completar su registro haga click en el siguiente link</p><br>
		<button><a href='http://prueba.mapacheproducciones.cl/datos.php?nom=$Nombre&ape=$Apellido&fecha=$FechaNacimiento&email=$Email&fono=$Telefono&pass=$Password'>Aqui</a></button><br>
		<p>Ahora podras cotizar nuestros servicios y contactarse con nosotros en la ventana contacto</p>
		
	</div>";
	$asunto = "Verificación de Registro";
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$headers .= "From: Mapache Producciones <mantenimiento@mapacheproducciones.cl>\r\n";

			
	if ($verificar == 0) {
		$envio = mail($Email,$asunto,$mensaje,$headers);
		echo "Su e-mail se a enviado correctamente.";
		header("Location: registro.php?enviado=Se+ha+enviado+un+email+de+confirmacion+para+completar+su+registro");
	}else{
		header("Location: registro.php?error=Este+usuario+ya+ha+sido+registrado+anteriormente");
	}

?>