<?php
session_start();

$mensaje = $_POST["mensaje"];
$asunto = $_POST["asunto"];
$Email = $_SESSION["email"];
$nombre = $_SESSION["nombre"];
$apellido = $_SESSION["apellido"];
$Mapache = "i.ringler96@gmail.com , mantenimiento@mapacheproducciones.cl";

$texto = "<div style='text-align: center; background-color: #99FFFF; border-radius: 2em;'>
			<h2>".$nombre." ".$apellido." se ha intentado poner en contacto</h2>
			<h4>".$nombre." te ha enviado un mensaje a traves del sitio web:</h4>
			<p>".$mensaje."</p>
		</div>";

		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers .= "From: ".$nombre." ".$apellido."<".$Email.">\r\n";
		
		$envio = mail($Mapache,$asunto,$texto,$headers);

		if ($envio) {
			header("Location: contacto.php?enviado=Hemos+enviado+el+mensaje+al+administrador+.+Se+contactara+en+cualquier+momento");
		}
			
	
?>