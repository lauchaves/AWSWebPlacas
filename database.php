<?php
	function ConectarBaseDatos()
	{
		$conexion=mysqli_connect("localhost","root","","bd_banners")
		or die("Problemas con la conexión");
		return $conexion;
	}	
?>