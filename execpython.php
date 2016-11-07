<?php 

      
//echo "RUNNING PYTHON SCRIPT";

/*
$command = escapeshellcmd('/home/laurens/repoLaurens/ProyectoInteligenciaArtificial/EntregI/Main.py');
system($command);
$output = shell_exec($command);
echo $output;
echo "END";
*/ 

//passthru('python /home/laurens/repoLaurens/ProyectoInteligenciaArtificial/EntregI/Main.py');
      
//$command = escapeshellcmd('python /home/laurens/PycharmProjects/prueba/pruebaMain.py');
//$command = escapeshellcmd('python /home/laurens/repoLaurens/ProyectoInteligenciaArtificial/EntregaI/Main.py');

//$command = escapeshellcmd('python /home/laurens/repoLaurens/proyectoIA-SO/EntregaI/Main.py');
$command = escapeshellcmd('python /home/laurens/opencv-3.0.0/pruebaMain.py');
system($command);   
$output = shell_exec($command);
//echo $output;
echo "END";    
?>