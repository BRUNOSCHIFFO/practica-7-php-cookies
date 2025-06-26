<?php
session_start();
include("conexion.php");
$elmail=$_POST["Mail"];
$sql = "SELECT * FROM alumnos WHERE mail = '$elmail'";
$result = mysqli_query($conexion, $sql);
if ($result) {
    $extraido = mysqli_fetch_array($result);
    if ($extraido) {
        echo "Mail encontrado: " . $extraido['mail'];
        $nombre=$extraido['nombre'];
        $_SESSION["Nombre"]=$nombre;
    } else {
        echo "No se encontró ningún resultado.";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
<html>
    <br>
    <br>
    <a href="mostrarr.php"> Página de bienvenida... </a>
</html>