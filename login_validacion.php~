<?php 
	session_start();
   require_once("database.php");
	
   $conexion=ConectarBaseDatos();

  // var_dump($_POST['usuario']);
   //die();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $usuario = mysqli_real_escape_string($conexion,$_POST['usuario']);
      $contrasena = mysqli_real_escape_string($conexion,$_POST['contrasena']); 
      
      $sql = "SELECT id FROM usuario WHERE usuario = '$usuario' 
      and contrasena = '$contrasena'";
      $result = mysqli_query($conexion,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
      
      $count = mysqli_num_rows($result);
      mysqli_close($conexion);
      $_SESSION["error"]=null;
      $_SESSION['usuario'] =null;
      echo "imhere";

         $_SESSION['usuario'] = $usuario;         
         header("location: dashboard.php");
      }else {
         $error = "Usuario y contraseña inválidos";
         $_SESSION['error']=$error;
         header("location: login.php");
      }
   
?>