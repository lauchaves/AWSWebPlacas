<?php 
session_start(); 
//require_once("cabecera.php");
?>
<?php 
   if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]=="")
   {
      $error = "Usuario y contraseña inválidos";
      $_SESSION['error']=$error;
      header("location: login.php");
   }
  // Cabecera();   
?>
<!DOCTYPE html>
<html lang='es'>
   <head>
      <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <meta name='msapplication-tap-highlight' content='no'>
      
      <title>Dashboard </title>
      <link rel='apple-touch-icon-precomposed' href='img/favicon/apple-touch-icon-152x152.png'>
      <!-- For iPhone -->
      <meta name='msapplication-TileColor' content='#00bcd4'>
      <meta name='msapplication-TileImage' content='img/favicon/mstile-144x144.png'>
      <!-- For Windows Phone -->
      <!-- CORE CSS-->


      <link href='css/materialize.min.css' type='text/css' rel='stylesheet' media='screen,projection'>
      <link href='css/style.css' type='text/css' rel='stylesheet' media='screen,projection'>

   </head>
   <body class='loaded'>
      <!-- Start Page Loading -->
      <div id='loader-wrapper'>
         <div id='loader'></div>
         <div class='loader-section section-left'></div>
         <div class='loader-section section-right'></div>
      </div>
      <!-- End Page Loading -->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START HEADER -->
      <header id='header' class='page-topbar'>
         <!-- start header nav-->
         <div class='navbar-fixed'>
            <nav class='cyan'>
               <div class='nav-wrapper'>
                  <ul class='left'>
                     <li>
                        <h1 class='logo-wrapper'>
                           Selector de Imagenes</h1>
                     </li>
                  </ul>
                  
                  <ul class='right hide-on-med-and-down'>
                     
                  </ul>
               </div>
            </nav>
         </div>
         <!-- end header nav-->
      </header>
      <!-- END HEADER -->"
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START MAIN -->
      <div id="main">
          <form action="subir.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" /><br>
	<input type="submit" name="subir" value="Subir"/>
</form>
         
      </div>
      <!-- END MAIN -->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START FOOTER -->
      <footer class="page-footer">
         
      </footer>
      <!-- END FOOTER -->
      <!-- ================================================
         Scripts
         ================================================ -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!--materialize js-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      
   </body>
</html>