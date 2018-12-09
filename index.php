<?php
session_start();
?>
<html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Mapache Producciones</title>
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
            
      <div id="section">
          <left><h1>Mapache Producciones</h1></left>
          <div class="cont3">
          <p1>Encuentra tus mejores opciones para tu evento.
            Aqui podrás encontrar todos nuestros servicios con la mejor iluminación y audio de Temuco.</p1>
          </div>
            <img src="http://www.viajaraholanda.com/img/amsterdam-fiesta-noche.jpg" width="400" height="280">
            <img src="http://www.dsc.cl/wp-content/uploads/2018/07/fiesta.jpg" width="400" height="280">
<div class="cont1">
<h3>¿Que destaca en nuestros servicios?</h3>
<p2> hoy contamos con una diversidad de servicios perfectos para el matrimonio que quieren realizar. Su grupo de expertos trabaja con un moderno sistema de amplificación e iluminación, además de tener un sinfín de servicios que ponen a su alcance. Con la labor de los profesionales de esta empresa la diversión no estará ausente de este maravilloso evento que compartirán junto a sus seres queridos. Servicios que ofrece Organizar un matrimonio no es fácil y hay ciertos detalles que no pueden quedar en segundos lugar, de los cuales se preocupará el personal de trabajo de esta productora con el fin de asegurarles el éxito de su fiesta. Los servicios ofrecidos por esta compañía son los siguientes : Amplificación Iluminación DJ Animación Fotografía Filmación digital Videoproyección Karaoke Baile entretenido Grupo musical El personal de trabajo cubrirá de manera completa la organización de su celebración, con el fin de facilitarles su producción. Otros servicios Ram Producciones además les ofrece otros tipos de servicios para que su fiesta sea perfecta. Entre estos servicios destacan los siguientes: Banquetería Decoración Arreglos florales Zona de servicio Ram Producciones trabaja en base a altos estándares, con el fin de que tengan un matrimonio de primer nivel, el que sorprenderá a cada uno de sus invitados. Las oficinas de esta productora se encuentran en la ciudad de Temuco, en la Región de La Araucanía.
</p2></div>
<div class="cont2">
<p3>SERVICIOS<br><br>
ENTRETENIMIENTO: Organización De Fiestas, Animación Y Recepción, Entretenimiento
<br>
<br>
MÚSICA: Dj, Banda Musical Para Bodas, Alquiler De Máquina De Karaoke
<br>
<br>
CREACIÓN: Iluminación, Video Y Sonido Para Eventos, Organización De Bodas, Fotografía De Bodas, Fotografía
</p3></div>
      </div>
        <div id="aside">
          <h2>Noticias</h2>
          <h4>Nueva tecnología en iluminación</h4>

          <div class="cont4">
              <img src="http://contextodiario.com/wp-content/uploads/2018/03/luces-led.jpg" width="500" height="300">
<br><br>
            <p4>Hemos incorporado nueva tecnología led para ofrecer la mejor iluminación de Temuco.
              Esta tecnología trabaja con un controlador computarizado que permite una experiencia única en iluminación.</p>



          </div>
        </div>

</div>
<div id="footer"></div>
</div>


  </html>
