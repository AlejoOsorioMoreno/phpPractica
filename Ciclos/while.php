<?php
//while dowhile for forech
/*
$numero = 0;
while ($numero <= 20) {
    echo $numero++ , "<br>";
}
while ($numero >= 0) {
    echo $numero-- , "<br>";
}

$contador=12;
$numero= 10;
while ($contador >= 1    ) {

    echo $numero * $contador, "<br>";
    $contador--;
}

*/
//Como romper un While

// $c=1;
// while ($c<= 20) {
//     echo"$c <br>";
//     if ($c==10) {
//         echo "Se rompio el ciclo <br>";
//         break;
//     }
//     $c++;
// }
// $c=1;
while ($c<= 20) {
    if ($c==10) {
        $c++;
        continue;
    }
    echo "$c <br>";
    $c++;
}

