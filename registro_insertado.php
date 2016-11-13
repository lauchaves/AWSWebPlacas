<?php 
	
	$conexion=$conexion=mysqli_connect("52.38.138.57:3306","remote","1234","bd_banners","3306")
	or die("Problemas con la conexión");

    mysqli_query($conexion,"insert into usuario 
    	(usuario,contrasena,email,activo) values 
    	('$_REQUEST[usuario]','$_REQUEST[contrasena]'
    		,'$_REQUEST[email]',9)")

    or die("Problemas en el insert".mysqli_error($conexion));

    mysqli_close($conexion);

    header("location: login.php");
?>