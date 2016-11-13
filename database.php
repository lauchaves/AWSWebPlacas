<?php
	function ConectarBaseDatos()
	{
		$conexion=mysqli_connect("52.38.138.57:3306","remote","1234","bd_banners","3306")
		or die(mysql_error());
		return $conexion;
	}	
?>