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

  $listado = "select * from noticias where id = '$_GET[id]' ";
  $sentencia = mysql_query($listado,$conn);
  if($rs=mysql_fetch_array($sentencia,$mibase)){
    $id= $rs["id"];
    $titulo_noticia = str_replace("\r\n","<br>",$rs["titulo_noticia"]); 
    $completo_noticia = str_replace("\r\n","<br>",$rs["completo_noticia"]);
  }

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Detalle Destacados AIT SV Ltda</title>
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
        <li><a href="index.php">Inicio</a></li>
        <li><a href="proyectos.php">Proyectos</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a class="activo" href="destacados.php">Destacados</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
  </div>
</header>

<div id="w_seccion">
    <div class="slider_seccion">
      <ul class="slides_seccion">
        <li class="slide">
          <figure>
            <img src="imagenes/secciones/1.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <img src="imagenes/secciones/2.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <img src="imagenes/secciones/3.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <img src="imagenes/secciones/4.jpg">
          </figure>
        </li>
      </ul>
    </div><!-- @end .slider -->
</div><!-- @end #w -->

<section class="contenido_nosotros">
  <div class="centro_nosotros">
      <div class="img_nosotros2">
        <img src="imagenes/destacados2/<?php echo $rs["id"]; ?>.jpg">
      </div>
      <div class="texto">
        <h2><?php $texto = str_replace("\r\n","<br>",$titulo_noticia); echo $texto ?></h2>
        <p><?php $texto = str_replace("\r\n","<br>",$completo_noticia); echo $texto ?></p>
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
    <form action="detalledestacado.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
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
  $('.slider_seccion').glide({
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