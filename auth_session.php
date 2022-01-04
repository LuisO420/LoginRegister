<?php
    //autentifica la sesión en la pagina que se incluya
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>