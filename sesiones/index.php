<?php

//Nombre de al cookie
session_name("LOGIN");
session_start();

$_SESSION['contador'] = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <form action="login.php" method="POST">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" id="usuario" name="usuario">
        </div>
        <br>
        <div>
            <label for="clave">Clave: </label>
            <input type="password" id="clave" name="clave">
        </div>

        <button type="submit">Login</button>
    </form>

</body>

</html>