<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE servicios SET titulo_servicio ='".$_POST["titulo_servicio"]."',contenido_servicio ='".$_POST["contenido_servicio"]."'   WHERE id  = '" .$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar : ".mysql_error);


?>
<script language="javascript">
	window.opener.document.location="servicios.php"
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
$listado = "select * from  servicios where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form action="editarservicios.php?id=<?php echo $_GET["id"]; ?>" method="post" name="form1" id="form1">
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
            <td width="69%" valign="top" class="Letras1"><input name="titulo_servicio" type="text" id="titulo_servicio" value="<?php echo $rs["titulo_servicio"]; ?>" /></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos"><span class="texto">Contenido</span>:&nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="contenido_servicio" cols="40" rows="5" class="Letras1" id="contenido_pcurso"><?php echo $rs["contenido_servicio"]; ?></textarea>
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