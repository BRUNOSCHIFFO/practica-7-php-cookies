<?php
setcookie('noticia', '', time() - 86400);
header('Location: ejercicio4.php');exit;
?>