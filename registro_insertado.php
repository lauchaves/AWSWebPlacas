<?php 
	
	$conexion=mysqli_connect("52.38.138.57:3306","remote","1234","bd_banners","3306")
	or die("Problemas con la conexión");

    mysqli_query($conexion,"insert into usuario 
    	(usuario,contrasena,email) values 
    	('$_REQUEST[usuario]','$_REQUEST[contrasena]'
    		,'$_REQUEST[email]')")

    or die("Problemas en el insert".mysqli_error($conexion));

    mysqli_close($conexion);

    header("location: login.php");
?>