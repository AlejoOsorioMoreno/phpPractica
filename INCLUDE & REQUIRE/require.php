<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>

<body>
    <?php
        require  './Header/header.php';
        require '../Ciclos/while.php';
    ?>
        <h1>Tercera Pagina</h1>
    <?php
        include "./footer/footer.php"
    ?>
</body>

</html>
<?php
/* 
Hace la misma operacion que el include, pero en caso de no existir
el archivo o error en el mismo mostrara un 'fatal error' y el script no se sigue
ejecutando


require("ruta_archivo.php");
require "ruta_archivo.php";

require_once("ruta_archivo.php");
require_once "ruta_archivo.php";
*/


//require '../Ciclos/while.php';
// se va a requerir una sola vez, sio ya esta requerido no se requerira una vez mas 
//require_once '../Ciclos/for.php';