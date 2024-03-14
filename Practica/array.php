<?php
//Array escalares
$numeros = [1,2,3,4,5,6,7,8,9];

echo $numeros[1], "<br>";

$nombres= ["Carlos",
            "Alejandro", 
            "Jose",
            "Vanessa"
    ];

echo $nombres[1], "<br>";
//Array asociativos


$tutor = [
            "nombre"=>"Alejo",
            "apellido"=>"Osorio",
            "edad"=>27
        ];
echo $tutor['nombre'], "<br>";

echo count($tutor), "<br>";

//Array multiples dimesiones
$tutor2 = [
            "nombre"=>"vanessa",
            "apellido"=>"Sanchez",
            "edad"=>21,
            "cursos"=> ["PHP","JAVA","JAVASCRIPT"]
            ];
echo $tutor2  ["cursos"][1], "<br>";
echo count($tutor2,COUNT_RECURSIVE);
