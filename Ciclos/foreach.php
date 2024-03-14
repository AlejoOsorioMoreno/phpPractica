<?php
// CICLO FOREACH iterar sobre array

$laptop=["Acer Nitro 5",
        "Windows 11", 
        "AMD Ryzen 5 4600H",
        "SSD 256GB",
        "RAM 24GB"];

$frutas= [
    "Fresas"=> 110,
    "Peras"=>30,
    "Sandias"=> 10,
    "Melocotones"=> 17,
    "Manzanas"=> 9
];
//Asi recorre todo el array y el valor en cada posicion
foreach ($laptop as $key ) {
    echo $key,"<br>";
}

foreach ($laptop as $key => $valor ) {
    echo $key." "." ".$valor."<br>";
}

//Asi recorre todo el array y el valor en cada posicion
foreach ($frutas as $clavec ) {
    echo $clavec,"<br>";
}
// Recorre el array con el valor
foreach ($frutas as $clavec => $valor1 ) {
    echo $clavec." "." ".$valor1."<br>";
}

//ejemplo de como se extraerian elementos de una base
//de datos y se almacenan en un array
$productos= [
    ["codigo" => "A0001","descripcion" => "Mouse"],
    ["codigo" => "A0002","descripcion" => "Teclado"],
    ["codigo" => "A0003","descripcion" => "Monitor"],
    ["codigo" => "A0004","descripcion" => "Impresor"],  
];

foreach ($productos as $key) {
    echo $key["codigo"]." ".$key["descripcion"]."<br>";
}


//como romper un forech
$pc=[
    "SO",
    "SSD",
    "GPU",
    "RAM",
    "CPU",
];

foreach ($pc as $key ) {
    echo "$key <br>";
    if ($key== "GPU") {
    echo "Paro por que ya encontro GPU";
    break;    
    } 
}
// ASI SE PUEDE OMITIR UNA SENTENCIA CON EL CONTINUE
foreach ($pc as $key ) {
    if ($key== "GPU") {
        continue;    
        } 
    echo "$key <br>";

}