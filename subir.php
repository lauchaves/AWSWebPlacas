<?php
   //require_once("database.php");
	
   //$conexion=ConectarBaseDatos();

mysql_connect("52.38.138.57:3306","remote","1234") or die(mysql_error()) ;
mysql_select_db("bd_banners") or die(mysql_error()) ;

$imagen1= $_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="/var/www/html/placasPythonFinal/imagenes/".$imagen1;

$destino2 ="/var/www/html/AWSWebPlacas/imagenes/".$imagen1;
 $fp     = fopen($ruta, 'r+b');
$data = fread($fp, filesize($ruta));
fclose($fp);

                //escapar los caracteres
                //$data = mysql_escape_string($data);


copy($ruta, $destino);
copy($ruta, $destino2);
mysql_query("INSERT INTO imagenes (tipo_imagen, nombreimagen) VALUES ( '$destino','$imagen1')") ;
header("location: dashboard.php");


/*
echo "asd";

$command = escapeshellcmd('/home/laurens/repoLaurens/ProyectoInteligenciaArtificial/EntregI/Main.py');
$output = shell_exec($command);
echo $output;

*/

?>