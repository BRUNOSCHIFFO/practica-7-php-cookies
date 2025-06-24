<?php
if(!isset($_COOKIE["noticia"])){
    echo "<h1>TITULARES:</h1>
    <h3>Política: El congreso debate una nueva reforma.</h3>
    <h3>Deportes: Argentina se prepara para la Copa América.</h3>
    <h3>Economía: El dólar cierra en alza y preocupa al mercado.</h3>";
}else{
    $valor= $_COOKIE["noticia"];
if ($valor=="Politica"){
    echo "<h3>Política: El congreso debate una nueva reforma.</h3>";}
else{
    if($valor=="Deportiva"){
        echo "<h3>Deportes: Argentina se prepara para la Copa América.</h3>";
    }else{
        echo "<h3>Economía: El dólar cierra en alza y preocupa al mercado.</h3>";
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
   <form action="recibe.php" method="post">
  <input type="radio" id="Politica" name="Tipo" value="Politica">
  <label for="Politica">Politica</label>
  <input type="radio" id="Economica" name="Tipo" value="Economica">
  <label for="Economica">Economica</label>
  <input type="radio" id="Deportiva" name="Tipo" value="Deportiva">
  <label for="Deportiva">Deportiva</label>   </br>
  <input type="submit">
  </form>
</body>
<a href="borrar.php">borrar memoria??</a>
</html>