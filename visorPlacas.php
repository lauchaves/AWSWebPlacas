<!DOCTYPE HTML>

<html>
	<head>
        <title>Visor de imagenes</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	</head>
	<body id="top">

		<!-- Header -->
        <div class="page-class" >
        <div class="container text-center" style="background-color: #4696e5">
            <h1><a style="color: #ffffff" >Reconocimiento Matriculas Autos</a></h1>
        </div>
        </div>	
        <div class="container">
            <br>
			
                <?php
		mysql_connect("52.38.138.57:3306","remote","1234") or die(mysql_error()) ;
		mysql_select_db("bd_banners") or die(mysql_error()) ;

                    $result = mysql_query("SELECT * FROM imgplaca");
                    echo "<div class=\"table-responsive\">";
                    echo "<table class=\"table table-hover table-mc-light-blue\"  align=\"center\">
                    <th align=\"center\">Nombre Imagen</th>
                    <th align=\"center\">Numero Placa</th>
                    <th align=\"center\">Imagen</th>";

                    while($row=mysql_fetch_array($result))
                    {
                    echo "<tr><td align=\"center\">".$row["nombreimg"]."</td>
                    <td align=\"center\">".$row["placa"]."</td>
                    <td align=\"center\"><img
                    src=./imagenes/".$row['nombreimg']." height=\"250\"
                    width=\"300\"/></td></tr>";
                    }
                    echo "</table>";
                    echo "</div>";

                ?>
            <button onclick="location.href = './home.html';" id="myButton" class="btn-default" > Volver</button>
            
            </div>

        <div id="footer">
        <div class="container text-center">
            <p class="copyright">&copy;  Credits: Laurenth, Eder, Hellen <a >2016</a></p>
        </div>
        </div>
		

	</body>
</html>






