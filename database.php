<?php
	function ConectarBaseDatos()
	{
		$conexion=mysqli_connect("52.38.138.57:3306","root","","bd_banners","3306")
		or die("Problemas con la conexión");
		return $conexion;
	}	
?>