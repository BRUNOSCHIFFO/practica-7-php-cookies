<?php
$conexion = mysqli_connect("localhost", "root", "", "compras");
if (!$conexion){
    die("conexión fallida". mysqli_connect_error());
} 
?>