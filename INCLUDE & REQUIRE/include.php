<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include("./Header/header.php");
        include '../Ciclos/for.php';
        include_once '../Ciclos/for.php';
    ?>
        <h1>Pagina secundaria For</h1>
    <?php
    include "./footer/footer.php"
    ?>
</body>

</html>
<?php

/*Insertar en nuestro script un codgio procedente de otro
archivo, si no eciste dicho archivo o si contiene algun tipo de error nos
mostrara un 'warning' por pantalla y el script seguira ejecutandose

include("ruta_archivo.php");
include "ruta_archivo.php";

inlcude_once("ruta_archivo.php");
inlcude_once "ruta_archivo.php";
*/

