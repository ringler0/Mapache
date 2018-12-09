<?php
session_start();

$mensaje = $_POST["mensaje"];
$asunto = $_POST["asunto"];
$Email = $_SESSION["email"];
$nombre = $_SESSION["nombre"];
$apellido = $_SESSION["apellido"];
$Mapache = "i.ringler96@gmail.com";

		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers .= "From: ".$nombre." ".$apellido."<".$Email.">\r\n";
		
		$envio = mail($Mapache,$asunto,$mensaje,$headers);

		if ($envio) {
			header("Location: contacto.php?enviado=Hemos+enviado+el+mensaje+al+administrador+.+Se+contactara+en+cualquier+momento");
		}
			
	
?>