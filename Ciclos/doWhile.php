<?php
//do-while

// $a=1;
// do {
//     echo $a++, "<br>";
// } while ($a <=20);

// $a=20;
// do {
//     echo $a--, "<br>";
// } while ($a >=1);

// $numeros= 10;
// $contador = 0;

// do {
//    echo $numeros* $contador, "<br>";
//    $contador++;
// } while ($contador <= 12);
// $numeros= 10;
// $contador = 12;

// do {
//     echo $numeros* $contador, "<br>";
//     $contador--;
//  } while ($contador >= 1);
 

$a=1;
// do {
//     if ($a==10) {
//         $a++;
//         continue;
//     }
//     echo "$a <br>";
//     $a++;
    
// } while ($a <=20);
do {
    if ($a==10) {
        break;
    }
    echo "$a <br>";
    $a++;
    
} while ($a <=20);
