<?php
session_start();
$Usuario= $_POST['Usuario'];
$_SESSION["Usuario"]=$Usuario;
$contraseña= $_POST['Contraseña'];
$_SESSION["Contraseña"]=$contraseña;
echo "<h1>¡Ya te registraste!</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a  href="mostrar.php">Ir a la página de datos guardados</a>
</body>
</html>

