<?php
session_start();
extract($_REQUEST);
// include("conexion.php"); REEMPLAZADA POR LINEA DEBAJO
include(__DIR__ . "/conexion.php");
if(!isset($cantidad)){$cantidad=1;}
$query="select * from catalogo where id='".$id."'";
$qry=mysqli_query($conexion, $query);
$row=mysqli_fetch_array($qry);
if(isset($_SESSION['carro'])){
$carro=$_SESSION['carro'];}
$carro[md5($id)] = array(
    'identificador' => md5($id),
    'cantidad'      => $cantidad,
    'producto'      => $row['producto'],
    'precio'        => $row['precio'],
    'id'            => $id
); 
$_SESSION['carro']=$carro; 
header("Location:catalogo.php?".SID);
?> 
