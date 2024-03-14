<?php
    //si isset viene definida devolvera true y si es distinto a vacio da true
    if (isset($_POST["numero"])&& $_POST['numero']!="") {
        for ($i=12; $i>=1  ; $i--) { 
            echo numero." X".$i." = " .$i*$numero."<br>";
        }
    }else {
        echo "No definida";
    }