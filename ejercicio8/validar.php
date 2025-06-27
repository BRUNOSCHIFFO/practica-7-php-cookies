<?php
session_start();
?>
<html>
<?php
include("conexion.php");
$lacancion=$_POST["Cancion"];
$sql = "SELECT * FROM buscador WHERE cancion = '$lacancion'";
$result = mysqli_query($conexion, $sql);
if ($result) {
    $extraido = mysqli_fetch_array($result);
    if ($extraido) {
        echo "Cancion encontradaa: " . $extraido['cancion'];?>
        <a href="form.html"> volver </a><?php
    } else {
        echo "No se encontró ningún resultado.";?>
        <a href="form.html"> volver </a><?php
        
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
</html>