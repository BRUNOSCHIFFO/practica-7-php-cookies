
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cargar usuario</title>
</head>
<body>
    <h1> Bienvenido...!!</h1><?php if (isset($_COOKIE["user"])){
        $valor=$_COOKIE["user"];
        echo "<h2> Tu ultimo usuario fue:$valor </h2>";
    }
    else{echo "<h1> Por primera vez... </h1>";}
    ?>
    <form action="recibe.php" method="post">
        <p><label> Usuario <input type="text" name="usuario" 
        size="25" required /> </label></p>   
        <input type="submit" value="Agrega usuario">
    </form>
</body>
</html>