<?php
if (!empty($_POST["Tipo"])){
$valor= $_POST["Tipo"];
setcookie("noticia", $valor);}
header("Location: ejercicio4.php");
exit?>