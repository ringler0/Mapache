<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mapache Producciones</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 , maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estiloP.css">
</head>
<body>
	<center>
        <img src="LogoMapache.png" width="200" height="200">
      </center>
<div id="body">
      <div id="contenedor">
      <div id="header">
      </div>
        <div id="nav">
          <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Galeria</a>
                <ul class="submenu">
                  <li><a href="#">2017</a></li>
                  <li><a href="#">2018</a></li>
                  <li><a href="#">2019</a></li>
              </ul>
            </li>
            <li><a href="#">Servicios</a>
                <ul class="submenu">
                  <li><a href="#">Servicio 1</a></li>
                  <li><a href="#">Servicio 2</a></li>
                  <li><a href="#">Servicio 3</a></li>
                </ul>
            </li>
            <li><a href="cotiza.php">Cotiza</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="login.php">Inicia Sesion</a></li></div>

            <br>
            <br>
            <br>
            <?php
          if (isset($_GET["enviado"])) {
            $enviado = $_GET["enviado"];
            echo "<p style='text-align:center; color:white;'>$enviado</p>";
          }else{
        ?>
        	<div class="container">
        		<br>
        		<form action="correoCambioPass.php" method="get">

        		<div class="form-group login col-md-5">
        			<label for="email">Correo electronico:</label>
        			<input type="email" name="email" placeholder="Correo electronico: " class="form-control" required><br>
        		</div>


        		<button class="btn btn-primary" type="submit">Enviar</button>

        	</form>
        	<?php
        	    if(isset($_GET["error"])){
        	      $error = $_GET["error"];
        	      echo "<p style='text-align:center; color:white;'>$error</p>";
        	    }
          	?>
        	</div>
          <?php
             }
          ?>

	<script src="Bootstrap/js/jQuery.js"></script>
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>