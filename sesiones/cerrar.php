<?php
    session_name("LOGIN");
    session_start();

    session_destroy();
    

    //Codigo javascript para redireccionar
    echo"<script> window.location.href='contador.php'</script>";