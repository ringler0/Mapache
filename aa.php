<?php
session_start();
?>
<html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Mapache Producciones</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="bg-dark">
      <center class="container-fluid bg-dark">

        <img src="LogoMapache.png" width="320" height="320">
      </center>

<div class="container-fluid bg-dark mt-5">

    <div class="row bg-info text-white">
  <h5 class="col-sm-2 text-center"><a href="index.php">Inicio</a></h5>
    <h5 class="col-sm-2 text-center"><a href="galeria.php">Galeria</a></h5>
  <h5 class="col-sm-2 text-center"><a href="servicio.php">Servicios</a></h5>
  <h5 class="col-sm-2 text-center"><a href="cotiza.php">Cotiza</a></h5>
  <h5 class="col-sm-2 text-center">
    <?php
      if ($_SESSION["nombre"]) {
        echo "<h5 class='col-sm-2 text-center'>Bienvenido ".$_SESSION['nombre']."</h5>";
        echo("<h5 class='col-sm-2 text-center'><a href='cerrarSesion.php'>Cerrar Sesion</a></h5>");
        echo("<h5 class='col-sm-2 text-center'><a href='perfil.php'>Perfil</a></h5>");
      }else{
    ?>
    <a href="login.php">Inicia sesion</a>
    <?php
      }
    ?>
  </h5>

</div>

<div class="row container-fluid bg-info">
  <h5 class="col-sm-4 text-white align-middle">+56988912363</h5>
  <h5 class="col-sm-4 text-white align-middle"> CORREO: mapache.producciones.tco@gmail.com</h5>
    <h5 class="col-sm-4 text-white align-middle">REDES SOCIALES: mapache.producciones.tco</h5>
</div>
</div>
</div>
  
</body>


  </html>
