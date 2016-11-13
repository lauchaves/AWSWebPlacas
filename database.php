<?php
	function ConectarBaseDatos()
	{
		$conexion=mysqli_connect("ec2-52-38-138-57.us-west-2.compute.amazonaws.com","root","","bd_banners","3306")
		or die("Problemas con la conexión");
		return $conexion;
	}	
?>