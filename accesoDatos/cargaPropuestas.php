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
$arr = array();

if ($_GET["accion"] == 'listarCandidatos') {
    $datoEvent = $conn->query("SELECT id,nombres,partidoPolitico,'' as rutaImagen FROM `candidato`");

    while ($datoEventNEW = $datoEvent->fetch_assoc()) {
        $arr[] = $datoEventNEW;
    }
    echo json_encode($arr);
}

if ($_GET["accion"] == 'listarPropuestas') {
    $datoEvent = $conn->query("SELECT descripcion,tipo,candidato FROM `propuesta` where tipo=" . $_GET["tipo"]);

    while ($datoEventNEW = $datoEvent->fetch_assoc()) {
        $arr[] = $datoEventNEW;
    }
    echo json_encode($arr);
}

if ($_GET["accion"] == 'listarCantidadPropuestas') {
    $datoEvent = $conn->query("SELECT candidato.nombres, propuesta.tipo, Count(propuesta.descripcion) AS `cantidad` FROM propuesta INNER JOIN candidato ON candidato.id = propuesta.candidato WHERE propuesta.tipo = " . $_GET["tipo"] . " GROUP BY candidato.nombres, propuesta.tipo");

    while ($datoEventNEW = $datoEvent->fetch_assoc()) {
        $arr[] = $datoEventNEW;
    }
    echo json_encode($arr);
}

if ($_GET["accion"] == 'listarFOTOS') {
    $datoEvent = $conn->query("SELECT * FROM reg");

    while ($datoEventNEW = $datoEvent->fetch_assoc()) {
        $arr[] = $datoEventNEW;
    }
    echo json_encode($arr);
}

$conn->close();
?>