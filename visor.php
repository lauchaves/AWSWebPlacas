<?php
mysql_connect("52.38.138.57:3306","remote","1234") or die(mysql_error()) ;
mysql_select_db("bd_banners") or die(mysql_error()) ;

$result = mysql_query("SELECT * FROM imgplaca");

echo "<center><h1>Reconocimiento Matriculas Autos</h1></center>";
echo "<table border=\"2\" align=\"center\">
<th>Nombre Imagen</th>
<th>Numero Placa</th>
<th>Imagen</th>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td align=\"center\">".$row["nombreimg"]."</td>
<td align=\"center\">".$row["placa"]."</td>
<td align=\"center\"><img
src=./imagenes/".$row['nombreimg']." height=\"250\"
width=\"300\"/></td></tr>";
}
echo "</table>";

/*
while($row = mysql_fetch_array($result))
{
//echo "<img src='./imagenes/cap1.png' />";
echo  "<div style='width: 500px; height: 500px; background-image: url(./imagenes/".$row['nombreimg'].")'></div>"; 
//echo "<div style='width: 10px; height= 10px'><img src='./imagenes/".$row['nombreimg']."' /></div>";
echo "<br />";
}




<?php
$qry="SELECT * FROM images";
$result=mysql_query($qry);
//$row=mysql_fetch_array($result);
echo "<center><h1>Image Gallery</h1></center>";
echo "<table border=\"2\" align=\"center\">
<th>Image Title</th>
<th>Image Description</th>
<th>Image</th>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td align=\"center\">".$row["img_title"]."</td>
<td align=\"center\">".$row["img_desc"]."</td>
<td align=\"center\"><img
src=http://localhost/vishakha/image_db/uploads/".$row["img_filename"]." height=\"100\"
width=\"100\"/></td></tr>";
}
echo "</table>";


*/

?>


