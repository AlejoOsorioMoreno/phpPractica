<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Hola mundo</title>
</head>
<body>
    <h1>Hola mundo HTML</h1>
</body>
</html> -->


<?php
/*
$nombre= $_POST['nombre'];
echo "nombre: $nombre <br>";

$clave= $_POST['clave'];

$clave_procesada= password_hash($clave, PASSWORD_DEFAULT,["cost"=>14]);

echo "Contraseña: $clave_procesada<br>";

$asignatura=$_POST['asignatura'];

echo "Asignatura: $asignatura";


$nombre= $_GET['nombre'];
echo "nombre: $nombre <br>";

$clave= $_GET['clave'];

$clave_procesada= password_hash($clave, PASSWORD_DEFAULT,["cost"=>14]);

echo "Contraseña: $clave_procesada<br>";

$asignatura=$_GET['asignatura'];

echo "Asignatura: $asignatura";
*/

foreach ($_POST['asignatura']as $asignatura) {
    echo $asignatura,"<br>";
}

echo"<br><br><br>";


$fresa=$_POST['frutas'];
foreach ($fresa as $fruta) {
    echo $fruta,'<br>';
}
