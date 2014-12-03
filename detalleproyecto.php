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

  $listado = "select * from proyectos where id = '$_GET[id]' ";
  $sentencia = mysql_query($listado,$conn);
  if($rs=mysql_fetch_array($sentencia,$mibase)){
    $id= $rs["id"];
    $titulo_proyecto = str_replace("\r\n","<br>",$rs["titulo_proyecto"]); 
    $completo_proyecto = str_replace("\r\n","<br>",$rs["completo_proyecto"]);
    $mapa = str_replace("\r\n","<br>",$rs["mapa"]);
  }

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Detalle Proyecto AIT SV Ltda</title>
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
        <li><a class="activo" href="proyectos.php">Proyectos</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="destacados.php">Destacados</a></li>
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
        <li class="slide">
          <figure>
            <img src="imagenes/secciones/1.jpg">
          </figure>
        </li>
      </ul>
    </div><!-- @end .slider -->
</div><!-- @end #w -->

<section class="contenido_nosotros">
  <div class="centro_nosotros">
      <div class="img_nosotros2">
        <img src="imagenes/proyectos/<?php echo $rs["id"]; ?>.jpg">
      </div>
      <div class="texto">
        <h2><?php $texto = str_replace("\r\n","<br>",$titulo_proyecto); echo $texto ?></h2>
        <p><?php $texto = str_replace("\r\n","<br>",$completo_proyecto); echo $texto ?></p>
      </div>

      <div class="galeria">
        <?php 
          $listadowww = "select * from  galeria where propiedad = '$rs[id]'";
          $sentenciawwww = mysql_query($listadowww,$conn);
          while($rssss=mysql_fetch_array($sentenciawwww,$mibase)){
        ?>
        <div class="img_galeria">
          <a class="fancybox" href="imagenes/galeria/<?php echo $rssss["id"] ?>.jpg" data-fancybox-group="gallery">
          <img src="imagenes/galeria/<?php echo $rssss["id"] ?>.jpg"></a>
        </div>
        <?php } ?>
      </div>

      <div class="mapa">
        <?php $texto = str_replace("\r\n","<br>",$mapa); echo $texto ?>
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
    <form action="detalleproyecto.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
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

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>
    <style type="text/css">
    .fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
    }

    body {
      
      margin: 0 auto;
    }
  </style>

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