<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estiloP.css">
	<link rel="stylesheet" type="text/css" href="cssregistro.css">
	<script type="text/javascript" src="js/Valida.js"></script>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
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
      <form onsubmit= "return Valida(this)" action="correoRegistro.php" method="post">
        	<div id="Reg">
        		<p class="texto">Registro</p>
        	<div class="Registro">
          	<span class="fontawesome-user"></span><input type="text" placeholder="Nombre" autocomplete="off" name="nom">
          	<span class="fontawesome-user"></span><input type="text" placeholder="Apellido" autocomplete="off" name="ape"> 
          	<span class="fontawesome-calendar"></span><input type="date" placeholder="Fecha de Nacimiento" autocomplete="off" title="Fecha de Nacimiento" name="fecha"> 
          	<span class="fontawesome-envelope-alt"></span><input type="text" id="email" name="email" placeholder="Correo" autocomplete="off">
          	<span class="fontawesome-phone"></span><input type="number" name="fono" placeholder="Telefono" autocomplete="off"  title="Sin incluir +569">
          	<span class="fontawesome-lock"></span><input type="password" name="pass" id="pass" placeholder="Contraseña" autocomplete="off"> 
          	<span class="fontawesome-lock"></span><input type="password" name="repassword" id="repass" placeholder="Repita Contraseña" autocomplete="off"><br>
            <div style="color:white; text-align: center;">
              <?php
              if(isset($_GET["error"])){
                $error = $_GET["error"];
                echo $error;
              }
            ?> 
            <br>
            </div>
          			<input type="submit" value="Registrar" title="Registra tu cuenta">
          	</div>
    	</form>
      <?php
        }
      ?>
  
   


<div id="footer"></div>
</div>
	
	
</body>
</html>