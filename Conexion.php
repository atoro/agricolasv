<?php
		$conn=mysql_connect("localhost","svltda_user","Tlt5cpRanQ}8"); // ESTABLECER CONEXION
		if(!$conn){
			die("error al conectarse al motor");
		}
		$mibase = mysql_select_db("svltda_bd",$conn); //SELECCION BD
		if(!$mibase){
			die("error al selecionar la base de datos");
		}
		
?>