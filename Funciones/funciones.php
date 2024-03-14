<?php

function prom_alumn($nota1, $nota2, $nota3)
{

    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    if ($promedio >= 7) {
        echo "El alumnno paso,  ";
    }else {
        echo "El alumno no paso: $promedio";
    }
    return $promedio;
}




