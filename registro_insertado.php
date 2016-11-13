<?php 
	
	$conexion=$conexion=mysqli_connect("ec2-52-38-138-57.us-west-2.compute.amazonaws.com","root","root","bd_banners","3306")
	or die("Problemas con la conexión");

    mysqli_query($conexion,"insert into usuario 
    	(usuario,contrasena,email,activo) values 
    	('$_REQUEST[usuario]','$_REQUEST[contrasena]'
    		,'$_REQUEST[email]',1)")

    or die("Problemas en el insert".mysqli_error($conexion));

    mysqli_close($conexion);

    header("location: login.php");
?>