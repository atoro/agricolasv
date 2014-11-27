<?php
include("../Conexion.php");  
 
	
	$listado = "select * from comuna where region ='$_valor' order by comuna ";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$_arreglo[] = array('id' => $rs["id"], 'data' => $rs["comuna"]);
	}	
echo json_encode($_arreglo);
?>