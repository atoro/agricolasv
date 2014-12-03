<?php
  include("Conexion.php");
  $listado = "select * from pie";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $texto_pie1 = str_replace("\r\n","<br>",$rs["texto_pie1"]); 
    $texto_pie2 = str_replace("\r\n","<br>",$rs["texto_pie2"]); 
  }

  $listado = "select * from contacto";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $titulo_contacto = str_replace("\r\n","<br>",$rs["titulo_contacto"]); 
    $contenido_contacto = str_replace("\r\n","<br>",$rs["contenido_contacto"]); 
  }

  $listado = "select * from slide";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $url1 = str_replace("\r\n","<br>",$rs["url1"]); 
    $slide1 = str_replace("\r\n","<br>",$rs["slide1"]); 
    $texto_slide1 = str_replace("\r\n","<br>",$rs["texto_slide1"]); 
    $url2 = str_replace("\r\n","<br>",$rs["url2"]); 
    $slide2 = str_replace("\r\n","<br>",$rs["slide2"]); 
    $texto_slide2 = str_replace("\r\n","<br>",$rs["texto_slide2"]); 
    $url3 = str_replace("\r\n","<br>",$rs["url3"]); 
    $slide3 = str_replace("\r\n","<br>",$rs["slide3"]); 
    $texto_slide3 = str_replace("\r\n","<br>",$rs["texto_slide3"]); 
    $url4 = str_replace("\r\n","<br>",$rs["url4"]); 
    $slide4 = str_replace("\r\n","<br>",$rs["slide4"]); 
    $texto_slide4 = str_replace("\r\n","<br>",$rs["texto_slide4"]); 
  }

  $listado = "select * from inicio";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $titulo_agricola = str_replace("\r\n","<br>",$rs["titulo_agricola"]); 
    $contenido_agricola = str_replace("\r\n","<br>",$rs["contenido_agricola"]); 
    $titulo_inmobiliaria = str_replace("\r\n","<br>",$rs["titulo_inmobiliaria"]); 
    $contenido_inmobiliaria = str_replace("\r\n","<br>",$rs["contenido_inmobiliaria"]); 
    $titulo_transporte = str_replace("\r\n","<br>",$rs["titulo_transporte"]); 
    $contenido_transporte = str_replace("\r\n","<br>",$rs["contenido_transporte"]); 
    $mapa = str_replace("\r\n","<br>",$rs["mapa"]); 
  }

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>AIT SV Ltda</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <meta name="Description" content="Texto que describe el contenido de la pagina">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/slide.css">
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="imagenes/icon.png">
</head>

<body>
<header>
  <div class="centro_header">
    <figure class="logo">
      <a href="index.php">
        <img src="imagenes/logo.jpg" alt="Logo AIT SV Ltda">
      </a>
    </figure>
    <nav id="menu">
      <a href="#" class="nav-mobile" id="nav-mobile"></a>
      <ul>
        <li><a class="activo" href="index.php">Inicio</a></li>
        <li><a href="proyectos.php">Proyectos</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="destacados.php">Destacados</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
  </div>
</header>

<div id="w">
    <div class="slider">
      <ul class="slides">
        <li class="slide">
          <figure>
            <figcaption>
              <h2><?php echo $slide1 ?></h2>
              <p><?php echo $texto_slide1 ?></p>
              <a href="<?php echo $url1 ?>">VER MAS</a>
            </figcaption>
            <img src="imagenes/slide/1.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <figcaption>
              <h2><?php echo $slide2 ?></h2>
              <p><?php echo $texto_slide2 ?></p>
              <a href="<?php echo $url2 ?>">VER MAS</a>
            </figcaption>
            <img src="imagenes/slide/2.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <figcaption>
              <h2><?php echo $slide3 ?></h2>
              <p><?php echo $texto_slide3 ?></p>
              <a href="<?php echo $url3 ?>">VER MAS</a>
            </figcaption>
            <img src="imagenes/slide/3.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <figcaption>
              <h2><?php echo $slide4 ?></h2>
              <p><?php echo $texto_slide4 ?></p>
              <a href="<?php echo $url4 ?>">VER MAS</a>
            </figcaption>
            <img src="imagenes/slide/4.jpg">
          </figure>
        </li>
      </ul>
    </div><!-- @end .slider -->
  </div><!-- @end #w -->

<section class="destacados">
  <div class="centro_destacados">
    <div class="grid1">
      <div class="img_destacado">
        <h2><?php echo $titulo_agricola ?></h2>
        <img src="imagenes/destacados/1.jpg">
      </div>
      <p><?php echo $contenido_agricola ?></p>
    </div>
    <div class="grid2">
      <div class="img_destacado">
        <h2><?php echo $titulo_inmobiliaria ?></h2>
        <img src="imagenes/destacados/2.jpg">
      </div>
      <p><?php echo $contenido_inmobiliaria ?></p> 
    </div>  
    <div class="grid3">
      <div class="img_destacado">
        <h2><?php echo $titulo_transporte ?></h2>
        <img src="imagenes/destacados/3.jpg">
      </div>
      <p><?php echo $contenido_transporte ?></p>
    </div>
  </div>
</section>

<section class="contenido_nosotros">
  <div class="centro_nosotros">
    <div class="img_nosotros">
      <img src="imagenes/nosotros/nosotros.jpg" alt="nosotros ait sv">
    </div>
    <div class="texto">
      <?php 
        $listado = "select * from nosotros";
        $sentencia = mysql_query($listado,$conn);
        while($rs=mysql_fetch_array($sentencia,$mibase)){
      ?>
      <h2><?php $texto = str_replace("\r\n","<br>",$rs["titulo_nosotros"]); echo $texto ?></h2>
      <p><?php $texto = str_replace("\r\n","<br>",$rs["contenido_nosotros"]); echo $texto ?></p>
      <?php } ?>
    </div>
    <div class="mapa">
      <?php echo $mapa ?>
    </div>
  </div>
</section>

<section id="contacto">
  <div class="centro_contacto">
    <figure class="carta">
      <img src="imagenes/carta.png" alt="icono carta">
    </figure>
    <h3><?php echo $titulo_contacto ?></h3>
    <div class="texto_contacto">
      <h4><?php echo $titulo_contacto ?></h4>
      <p><?php echo $contenido_contacto ?></p>
    </div>
    <form action="index.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
      <input class="input" name="Nombre" type="text" placeholder="Nombre"/>
      <input class="input" name="Mail" type="text" placeholder="E-mail"/>  
      <input class="input" name="Telefono" type="text" placeholder="Teléfono"/>
      <textarea name="Mensaje" id="Mensaje" class="mensaje" placeholder="Mensaje"></textarea>
      <input class="enviar" name="Enviar" type="submit" value="Enviar"/>
    </form>
  </div>
</section>

<footer>
  <a class="social" href="#"><img src="imagenes/facebook.png" alt="icono facebook"></a>
  <a class="social" href="#"><img src="imagenes/youtube.png" alt="icono youtube"></a>
  <a class="social" href="#"><img src="imagenes/twitter.png" alt="icono twitter"></a>
  <p><?php echo $texto_pie1 ?></p>
  <p><?php echo $texto_pie2 ?> / <a href="http://www.emagenic.cl" target="new">Desarrollado por emagenic.cl</a></p>  
</footer>

<!-- script menu -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script>
  $(function() {
      var btn_movil = $('#nav-mobile'),
          menu = $('#menu').find('ul');
      btn_movil.on('click', function (e) {
          e.preventDefault();
          var el = $(this);
          el.toggleClass('nav-active');
          menu.toggleClass('open-menu');
      })
  });
</script>

<!-- scrip slide -->
<script type="text/javascript" src="js/jquery.glide.min.js"></script>
<script type="text/javascript">
$(function(){
  $('.slider').glide({
    autoplay: 3500,
    hoverpause: true, // set to false for nonstop rotate
    arrowRightText: '&rarr;',
    arrowLeftText: '&larr;'
  });
});
</script>

<!-- scrip ancla -->
<script type="text/javascript">
  $(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});
</script> 

</body>
</html>
<?php
  if ($_POST["Enviar"]){
    $destinatario = "atoro@emagenic.cl"; // correo de destino //
    $nombre = $_POST["Nombre"];
    $telefono = $_POST["Telefono"];
    $mail = $_POST["Mail"];
    $mensaje = $_POST["Mensaje"];
    $asunto = "Consulta sitio web"; 
    $cuerpo = "
    <table width=100% border=0 cellspacing=0 cellpadding=0>
      <tr><td><strong>NOMBRE:</strong> $nombre</td></tr>
      <tr><td><strong>TELEFONO:</strong> $telefono</td></tr>
      <tr><td><strong>MAIL:</strong> $mail</td></tr>
      <tr><td><strong>CONSULTA:</strong> $mensaje</td></tr>
    </table>";
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
    $headers .= "From: $nombre <$mail>\r\n"; 
    mail($destinatario,$asunto,$cuerpo,$headers);
    echo "<script> alert('Su consulta fue enviada correctamente'); </script>";
    
    
  }
?>