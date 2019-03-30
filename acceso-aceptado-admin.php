<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once ('seguridad-global1.php');
        session_start();
    ?>
    <h1>hola 
        <?php
        echo $_SESSION["usuario"]
        ?>
    </h1>
</body>
</html>