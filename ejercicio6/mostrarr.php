<?php
session_start();
if (isset($_SESSION['Nombre'])){
    $nombre=$_SESSION['Nombre'];
    echo "Bienvenidooo $nombre ";
} else {
    echo "No podes visitar esta página ya que no existe tu mail.";
}