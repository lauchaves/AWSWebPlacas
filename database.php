<?php
	function ConectarBaseDatos()
	{
		$conexion=mysqli_connect("52.38.138.57","root","root","bd_banners","3306")
		or die("Problemas con la conexión");
		return $conexion;
	}	
?>