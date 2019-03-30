<?php
/* INICIO DE LA SESIÓN SI NO ESTÁ INICIADA */
if (!isset($_SESSION)) {
    session_start();
}
/* COMPROBACIÓN DE QUE EL USUARIO ESTÁ AUTENTIFICADO EN SU CORRESPONDIENTE NIVEL */
if ($_SESSION["autentificado"] != "si" && $_SESSION["nivel"] != 1) {
    /* SI EL USUARIO NO ESTÁ AUTENTICADO SE LE REDIRIGE A index.php */
    header("Location: index.php");
    /* Y SE SALE DEL SCRIPT */
    exit();
}
?>