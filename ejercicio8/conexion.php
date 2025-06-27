<?php
$conexion = mysqli_connect("localhost", "root", "", "prueba");
if (!$conexion){
    die("conexión fallida". mysqli_connect_error());
} 
?>