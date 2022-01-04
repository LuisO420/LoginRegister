<?php
    session_start();
    // Destruye la sesión
    if(session_destroy()) {
        // Al destruir la sesión se redirigé al login
        header("Location: login.php");
    }
?>