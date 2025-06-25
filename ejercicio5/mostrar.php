<?php
session_start();
$Contraseña =  $_SESSION["Contraseña"] ;
$Usuario= $_SESSION["Usuario"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar datos</title>
</head>
<body>
    <h1> Estos son tus datos</h1>
    <h3> Usuario: <?php  echo " $Usuario" ?> </h3>
    <h3> Contraseña: <?php echo " $Contraseña "?> </h3>
    <br>
    <br>
    <br>
    <a  href="form.html">Desea volver a cargar sus datos??</a>
</body>
</html>