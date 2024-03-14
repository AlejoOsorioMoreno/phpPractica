<?php

$fecha_1= "2021/11/29";
$fecha_2= "2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";


$array_fecha= explode("/",$fecha_1);
echo $array_fecha[2],"<br>";

$array_fecha2= explode("-",$fecha_2);
echo $array_fecha2[2];

$array_numeros= explode(" ",$numeros);
echo $array_numeros[2];
/*
$cadena_text= "Hola mundo";

// ucfirst convierte mi primera letra de cada palabra de mi cadena de texto
$cadena_text= ucfirst($cadena_text);
echo $cadena_text, "<br>";  
//strlen sirve para contar los caracteres que tiene mi cadena de texto contando espacios
$longitud=strlen($cadena_text);
echo $longitud," Caracteres de mi cadena de texto <br>";
//srt_word_count sirve para contar la cantidad de palabras mi cadena de texto
$palabras=str_word_count($cadena_text);
echo $palabras," Cuantas palabras tiene hola mundo<br>";
//strtolower sirve para convertir todos los caracteres de mi cade a letras minusculas
//strtoUPPER sirve para convertir todos los caracteres de mi cade a letras MAYUSCULAS

echo strtolower($cadena_text)."<br>";
echo strtoupper($cadena_text);
*/