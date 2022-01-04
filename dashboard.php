<?php
//autentificar la sesión del usuario en la pagina
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Pagina dashboard.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>