<?php
    require('db.php');
    // Cuando el form se realiza se hace el método request.
    if (isset($_REQUEST['username'])) {
        // quita los backslashes
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result && !empty($username) && !empty($email) && !empty($password)) {
            echo "<script>alert('Se registró exitosamente')</script>";
        } else {
            echo "<script>alert('Faltan algunos campos a rellenar')</script>";
        }
    }
?>