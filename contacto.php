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
    <title>Contacto</title>
  <link rel="stylesheet" href="estiloP.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 , maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
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
        <?php
          if (isset($_GET["enviado"])) {
            $enviado = $_GET["enviado"];
            echo "<p style='text-align:center; color:white;'>$enviado</p>";
          }else{
        ?>
        <div class="container">
          <form action="correoContacto.php" method="post">
            <div class="form-group">
              <label for="asunto">Asunto:</label>
              <input type="text" name="asunto" placeholder="Asunto" required class="form-control">
              <label for="mensaje">Mensaje:</label>
              <input type="textarea" name="mensaje" placeholder="Escriba aca el mensaje: " required class="form-control" >
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
          </form>
        </div>
        <?php
          if(isset($_GET["error"])){
            $error = $_GET["error"];
            echo "<p style='text-align:center; color:white;'>$error</p>";
          }
        ?>
        <?php
          }
        ?>

    <script src="Bootstrap/js/jQuery.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>
