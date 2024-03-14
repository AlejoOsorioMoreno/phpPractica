<?php

// CICLO FOR

// for ($i=0; $i < 21; $i++) { 
//     echo $i , "<br>";
// }
// for ($i=20; $i >= 1; $i--) { 
//     echo $i , "<br>";
// }
// $numeros=10;
// for ($i=0; $i < 12; $i++) { 
    
//     echo $i*$numeros , "<br>";
// }
// for ($i=12; $i >= 1; $i--) { 
    
//     echo $i*$numeros , "<br>";
// }

//como romper un ciclo for

for ($i=0; $i <= 10 ; $i++) { 
    if ($i==5) {
        echo"Se omitio el 5 <br>";
        continue;
    }
    echo $i , "<br>";
}
