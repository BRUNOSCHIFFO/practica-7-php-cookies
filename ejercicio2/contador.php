<?php
if(!isset($_COOKIE["contador"])){
    $valor=1;
    setcookie("contador",$valor);
}
else{
    $valor= $_COOKIE["contador"] + 1;
    setcookie("contador",$valor);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador con cooooookies</title>
</head>
<body>
    <?php if ($valor==1){
        echo "<h1>Bienvenido, es tu primera visita.</h1>";
    }
    else{
        echo "<h1>Has visitado esta página $valor veces.</h1>";
    }?>
</body>
</html>