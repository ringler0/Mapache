<?php
session_start();

if (empty($_SESSION["estado"])) {
  header("Location: login.php?error=Debe+conectarse+para+acceder.");
}
?>
<html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Cotizacion</title>
  <link rel="stylesheet" href="estiloP.css">
</head>
      <center>
        <img src="LogoMapache.png" width="320" height="320">
      </center>

<div id="body">
      <div id="contenedor">

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
            <li><a href="contacto.php">Contacto</a></li>
            <li></li>
            <li><?php
                  if ($_SESSION["nombre"]) {
                    echo "Bienvenido ".$_SESSION["nombre"];
                    echo("<a href='cerrarSesion.php'>Cerrar Sesion</a>");
                  }else{
                ?>
                <a href="login.php">Inicia Sesion</a>
                <?php
                  }
                ?>
            </li>
          </div>

          <body>
            
          </body>
  </html>
