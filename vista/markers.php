<?php

header('Content-Type: text/xml');
echo '<markers>';
include ("conexion.php");
$sql = mysqli_query($con, "select * from reg ORDER BY Id");
while ($row = mysqli_fetch_array($sql)) {
    echo "<marker id ='" . $row['Id'] . "' lat='" . $row['Lat'] . "' lng='" . $row['Lng'] . "' descripcion='" . $row['descripcion'] . "' tipoD='" . $row['tipoFalta'] ."' imagen='".$row['imgen']."'>\n";
    echo "</marker>\n";
}
mysql_close($bd);
echo "</markers>\n";
?>