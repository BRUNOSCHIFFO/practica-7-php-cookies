<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['carro'][md5($id)])) {
        unset($_SESSION['carro'][md5($id)]);
    }
}

header("Location:catalogo.php?" . SID);
exit;