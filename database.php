<?php
	function ConectarBaseDatos()
	{
		$conexion=mysqli_connect("localhost","root","","bd_banners","3306")
		or die("Problemas con la conexión");
		return $conexion;
	}	
?>