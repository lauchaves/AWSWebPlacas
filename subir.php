<?php
   //require_once("database.php");
	
   //$conexion=ConectarBaseDatos();

mysql_connect("52.38.138.57:3306","remote","1234") or die(mysql_error()) ;
mysql_select_db("bd_banners") or die(mysql_error()) ;

$imagen1= $_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="/var/www/html/placasPythonFinal/imagenes/".$imagen1;

$destino2 ="/var/www/html/AWSWebPlacas/imagenes/".$imagen1;

$destino3 ="/var/www/html/".$imagen1;

 $fp     = fopen($ruta, 'r+b');
$data = fread($fp, filesize($ruta));
fclose($fp);

                //escapar los caracteres
                //$data = mysql_escape_string($data);


copy($ruta, $destino);
copy($ruta, $destino2);
copy($ruta, $destino3);
if(!copy($ruta, $destino)){
    echo "no almaceno imagen en python";
}
if(!copy($ruta, $destino2)){
    echo "no almaceno imagen en web";
}
if(!copy($ruta, $destino3)){
    echo "no almaceno imagen en html";
}
mysql_query("INSERT INTO imagenes (tipo_imagen, nombreimagen) VALUES ( '$destino','$imagen1')") ;
header("location: home.html");


/*
echo "asd";

$command = escapeshellcmd('/home/laurens/repoLaurens/ProyectoInteligenciaArtificial/EntregI/Main.py');
$output = shell_exec($command);
echo $output;

*/

?>
