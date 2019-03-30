<?php
$se = "localhost";
$us = "root";
$co = "";
$bd = "bd1";

$mysqli = new mysqli($se, $us, $co, $bd);

if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
?>
