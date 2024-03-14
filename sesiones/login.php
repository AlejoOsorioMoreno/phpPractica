<?php

if ($_POST['usuario'] == "Alejandro" && $_POST { 'clave'} == "123456") {

    session_name("LOGIN");
    session_start();

    $_SESSION['usuario'] = "Alejandro";
    $_SESSION["apellido"] = "Osorio";
    $_SESSION["Pais"] = "Colombia";

    header("Location: contador.php");
    //redireccionamiento

    if (headers_sent()) {
        echo"<script> window.location.href='contador.php'</script>";
    }else {
        header("Location: contador.php");
    }

} else {
    echo "Datos incorrectos";
}