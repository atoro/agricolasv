<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update  inicio set titulo_agricola  = '$_POST[titulo_agricola]',contenido_agricola  = '$_POST[contenido_agricola]',titulo_inmobiliaria  = '$_POST[titulo_inmobiliaria]',contenido_inmobiliaria  = '$_POST[contenido_inmobiliaria]',titulo_transporte  = '$_POST[titulo_transporte]',contenido_transporte  = '$_POST[contenido_transporte]',mapa  = '$_POST[mapa]'
	";
	$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<title>Admin</title>

</head>

<body>
  <?php
	$listado = "select * from inicio";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$titulo_agricola = $rs["titulo_agricola"];
		$contenido_agricola = $rs["contenido_agricola"];
		$titulo_inmobiliaria = $rs["titulo_inmobiliaria"];
		$contenido_inmobiliaria = $rs["contenido_inmobiliaria"];
		$titulo_transporte = $rs["titulo_transporte"];
		$contenido_transporte = $rs["contenido_transporte"];
		$mapa = $rs["mapa"];
	}
	?>
  <form action="inicio.php" method="post" name="form1" id="form1">
    
    <table width="45%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Inicio</strong></div></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>Agricola : &nbsp;</p></td>
        <td valign="top"><input name="titulo_agricola" type="text" class="textopreguntas" id="titulo_tasaciones5" value="<?php echo $titulo_agricola; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="29%" height="86" align="right" valign="top" class="texto"><p>Contenido : &nbsp;</p></td>
        <td width="65%" valign="top"><textarea name="contenido_agricola" cols="50" rows="4" class="textopreguntas" id="contenido_agricola"><?php echo $contenido_agricola; ?> </textarea></td>
        <td width="6%">&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p><a href="../imagenes/destacados/Upload_foto.php?id=1" class="texto">Cambiar Imagen :</a> &nbsp;</p></td>
        <td valign="top"><img src="../imagenes/destacados/1.jpg" width="400" height="196"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="61" colspan="2" align="right" valign="top" class="texto"><p>&nbsp;</p></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>Inmobiliaria : &nbsp;</p></td>
        <td valign="top"><input name="titulo_inmobiliaria" type="text" class="textopreguntas" id="titulo_tasaciones6" value="<?php echo $titulo_inmobiliaria; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="89" align="right" valign="top" class="texto"><p>Contenido : &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_inmobiliaria" cols="50" rows="4" class="textopreguntas" id="contenido_inmobiliaria"><?php echo $contenido_inmobiliaria; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p><a href="../imagenes/destacados/Upload_foto.php?id=2" class="texto">Cambiar Imagen : </a>&nbsp;</p></td>
        <td valign="top"><img src="../imagenes/destacados/2.jpg" width="400" height="196"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="63" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>Transporte : &nbsp;</p></td>
        <td valign="top"><input name="titulo_transporte" type="text" class="textopreguntas" id="titulo_tasaciones7" value="<?php echo $titulo_transporte; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido : &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_transporte" cols="50" rows="4" class="textopreguntas" id="titulo_tasaciones4"><?php echo $contenido_transporte; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><a href="../imagenes/destacados/Upload_foto.php?id=3" class="texto">Cambiar Imagen : </a></td>
        <td valign="top"><img src="../imagenes/destacados/3.jpg" width="400" height="196"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="70" align="right" valign="top" class="texto">&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="307" align="right" valign="top" class="texto"><a href="../imagenes/nosotros/Upload_foto.php?id=nosotros" class="texto">Cambiar Imagen Nosotros: </a></td>
        <td valign="top"><img src="../imagenes/nosotros/nosotros.jpg" width="405" height="275"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Mapa : </p></td>
        <td valign="top"><textarea name="mapa" cols="50" rows="4" class="textopreguntas" id="contenido_transporte"><?php echo $mapa; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="49" colspan="3"><div align="center">
          <label>
          <input name="Grabar" type="submit" class="textobox3" id="Grabar" value="Grabar" />
          </label>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="texto">Volver</a></p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
</form>
</body>
</html>
<?php } ?>