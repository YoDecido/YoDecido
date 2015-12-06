
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "yodecido";	

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Conexion Fallada: " . $conn->connect_error);
	}
	$conn->query("SET NAMES utf8");

	
	$idtipo = $_GET['idtipo'];
	$descripcion = $_GET['des'];
	$ruta = $_GET['foto'];
	$latitud = $_GET['lati'];
	$logitud = $_GET['long'];
	$partidoPoli = $_GET['partido'];

	$posi = $latitud.",".$logitud;

	echo $idtipo." ".$descripcion." ".$ruta;

	$consulta = $conn->query("INSERT INTO `reg`(`imgen`, `descripcion`, `tipoFalta`, `partidoPolitico`, `Lat`, `Lng`, `Pos`) VALUES ('$ruta','$descripcion','$idtipo','$partidoPoli','$latitud','$logitud','$posi')");




	$conn->close();
?>		