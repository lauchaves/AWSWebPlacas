<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="msapplication-tap-highlight" content="no">
      <meta name="description" content="Sistema de matricula SIMAT">
      <meta name="keywords" content="Matricula,Escuela,Colegio,Universidad">
      <title>Login SIMAT</title>
      <!-- Favicons-->
      <link rel="icon" href="img/favicon/favicon-32x32.png" sizes="32x32">
      <!-- Favicons-->
      <link rel="apple-touch-icon-precomposed" href="img/favicon/apple-touch-icon-152x152.png">
      <!-- For iPhone -->
      <meta name="msapplication-TileColor" content="#00bcd4">
      <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
      <!-- For Windows Phone -->
      <!-- CORE CSS-->
      <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="css/icon.css" rel="stylesheet">
      <!-- Custome CSS-->    
      <link href="css/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
      <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->

   </head>
   <body class="blue loaded">

      <?php 
         if(isset($_SESSION["error"]))
         {
            echo "<div class='col s12 card-panel red lighten-3' >".
            $_SESSION['error']."</div>";
         }   
      ?>


      <!-- Start Page Loading -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- End Page Loading -->

      <div id="login-page" class="row">
         <div class="col s12 z-depth-4 card-panel">
            <form class="login-form" action="login_validacion.php" method="post">
               <div class="row">
                  <div class="input-field col s12 center">
                     
                     <p class="center">Por favor ingrese sus datos</p>
                  </div>
               </div>
               <div class="row margin">
                  <div class="input-field col s12">
                     <i class="material-icons prefix">person_pin</i>
                     <input id="usuario" name="usuario" type="text">
                     <label for="usuario">Usuario</label>
                  </div>
               </div>
               <div class="row margin">
                  <div class="input-field col s12">
                     <i class="material-icons prefix">lock</i>
                     <input id="contrasena" name="contrasena" type="password">
                     <label for="contrasena">Contraseña</label>
                  </div>
               </div>

               <div class="row">
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light col s12">Login</button> 
                </div>
              </div>

              <div class="row">
          <div class="input-field col s4 m4 l4">
            <p class="margin medium-small"><a href="registro.php">Registrarse</a></p>
          </div>
                   
        </div>

            </form>
         </div>
      </div>
      <!-- ================================================
         Scripts
         ================================================ -->
      <!-- jQuery Library -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!--materialize js-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <div class="hiddendiv common"></div>
   </body>
</html>
