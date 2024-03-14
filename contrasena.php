<?php

$clave = "Holamundo";

$clave2= "dsagas";

$clave_procesada = password_hash($clave, PASSWORD_BCRYPT, ["cost" => 11]);

echo password_verify($clave, $clave_procesada);

if (password_verify($clave, $clave_procesada)) {
    echo "Las claves coinciden";
} else {
    echo "las claves no coinciden ";
}


