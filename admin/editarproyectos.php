<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE proyectos SET titulo_proyecto ='".$_POST["titulo_proyecto"]."',breve_proyecto ='".$_POST["breve_proyecto"]."',completo_proyecto ='".$_POST["completo_proyecto"]."',mapa ='".$_POST["mapa"]."'   WHERE id  = '" .$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar : ".mysql_error);


?>
<script language="javascript">
	window.opener.document.location="proyectos.php"
	window.close();
	</script>	
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Editar</title>
<link href="../css/admin.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php 
$listado = "select * from  proyectos where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form action="editarproyectos.php?id=<?php echo $_GET["id"]; ?>" method="post" name="form1" id="form1">
  <table width="44%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="81%" valign="top"><p>
        <label>
          <input type="submit" name="Modificar" id="Modificar" value="Modificar" />
          </label>
        </p>
        <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="31%" height="32" align="right" valign="top" class="textos"><span class="texto">Nombre:</span>&nbsp;</td>
            <td width="69%" valign="top" class="Letras1"><input name="titulo_proyecto" type="text" id="titulo_proyecto" value="<?php echo $rs["titulo_proyecto"]; ?>" /></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos"><span class="texto">Contenido</span>:&nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="breve_proyecto" cols="40" rows="5" class="Letras1" id="contenido_pcurso"><?php echo $rs["breve_proyecto"]; ?></textarea>
            </span></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos"><span class="texto">Completo</span>:&nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="completo_proyecto" cols="40" rows="5" class="Letras1" id="contenido4"><?php echo $rs["completo_proyecto"]; ?></textarea>
            </span></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos"><span class="texto">url mapa</span>:&nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="mapa" cols="40" rows="5" class="Letras1" id="completo_proyecto"><?php echo $rs["mapa"]; ?></textarea>
            </span></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php } ?>
</body>
</html>
<?php } ?>