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
            <li><a href="index.html">Inicio</a></li>
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
            <li><a href="#">Cotiza</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="registro.html">Inicia Sesion</a></li></div>

        <form onsubmit= "return Valida(this)" action="correo.php" method="post">
	<div id="Reg">
		<p class="texto">Registro</p>
	<div class="Registro">

	<span class="fontawesome-user"></span><input type="text" required placeholder="Nombre" autocomplete="off" name="nom">
	<span class="fontawesome-user"></span><input type="text" required placeholder="Apellido" autocomplete="off" name="ape"> 
	<span class="fontawesome-calendar"></span><input type="date" required placeholder="Fecha de Nacimiento" autocomplete="off" title="Fecha de Nacimiento" name="fecha"> 
	<span class="fontawesome-envelope-alt"></span><input type="text" id="email" name="email" required placeholder="Correo" autocomplete="off">
	<span class="fontawesome-phone"></span><input type="number" name="fono" required placeholder="Telefono" autocomplete="off" min="10000000" max="99999999" title="Sin incluir +569">
	<span class="fontawesome-lock"></span><input type="password" name="pass" id="pass" required placeholder="Contraseña" autocomplete="off"> 
	<span class="fontawesome-lock"></span><input type="password" name="repassword" id="repass" required placeholder="Repita Contraseña" autocomplete="off"><br>
			<input type="submit" value="Registrar" title="Registra tu cuenta">
	</div>
	</form>
  <div class="error">
    <?php
    if(isset($_GET["error"])){
      $error = $_GET["error"];
      echo $error;
    }
  ?> 
  </div>
   


<div id="footer"></div>
</div>
	
	
</body>
</html>