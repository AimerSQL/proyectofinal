<?php
    session_start();
    $tipo = $_POST['tipo'];
    $peliId = $_POST['peliId'];
    $usuId = $_SESSION['id'];
    require ('conexion.php');
    $mysqli->set_charset("utf8");
    $mysqli->query("INSERT INTO cupones(tipo,usuId,peliId) VALUES ('$tipo','$usuId','$peliId')");
    $mysqli->close();
?>