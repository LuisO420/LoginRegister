<!DOCTYPE html>
<?php
include("login-function.php");
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Nombre de usuario" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Contraseña"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">Nuevo registro</a></p>
  </form>
</body>
</html>
