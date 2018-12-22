<?php
session_start();
?>
<html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Mi Perfil</title>
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
                    echo("<li><a href='perfil.php'>Perfil</a></li>");
                  }else{
                ?>
                <a href="login.php">Inicia Sesion</a>
                <?php
                  }
                ?>
            </li>
          </div>

        <div class="container">
        	<?php
	          if (isset($_GET["enviado"])) {
	            $enviado = $_GET["enviado"];
	            echo "<p style='text-align:center; color:white;'>$enviado</p>";
	          }else{
      		?>
      		<h4>Datos de Cuenta</h4>
      		<form action="actualizaDatos.php" method="post">
      			<div class="form-group">
          			<label for="name">Nombre:</label>
          			<input type="text" name="name" value="<?php echo $_SESSION["nombre"];?>">
          		</div>

          		<div class="form-group">
          			<label for="ape">Apellido:</label>
          			<input type="text" name="ape" value="<?php echo $_SESSION["apellido"];?>">
          		</div>

          		<div class="form-group">
          			<label for="email">Correo Electronico:</label>
          			<input type="text" name="email" value="<?php echo $_SESSION["email"];?>">
          		</div>

          		<div class="form-group">
          			<label for="num">Telefono:</label>
          			<input type="number" name="num" title="Sin incluir +569" value="<?php echo $_SESSION["numero"];?>">
          		</div>

          		<button class="btn btn-link" type=""><a href="nuevaPass.php">Para cambiar contraseña haga click aqui</a></button><br>

          		<button class="btn btn-primary" type="submit">Actualiza Datos</button>
      		</form>
        <?php
        	}
      	?>
        </div>
        <script src="Bootstrap/js/jQuery.js"></script>
		<script src="Bootstrap/js/bootstrap.min.js"></script>
    </div>        
      
    

  </html>
