<!DOCTYPE html>
<html>
<?php
include("registration-function.php");
?>
<head>
    <meta charset="utf-8"/>
    <title>Registro</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registro</h1>
        <input type="text" class="login-input" name="username" placeholder="Nombre de usuario" required />
        <input type="text" class="login-input" name="email" placeholder="E-Mail">
        <input type="password" class="login-input" name="password" placeholder="Contraseña">
        <input type="submit" name="submit" value="Registrar" class="login-button">
        <p class="link"><a href="login.php">Haga click para ir login</a></p>
    </form>
</body>
</html>