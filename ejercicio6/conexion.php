<?php
$conexion = mysqli_connect("localhost", "root", "", "BASE2");
if (!$conexion){
    die("conexión fallida". mysqli_connect_error());
} 
?>