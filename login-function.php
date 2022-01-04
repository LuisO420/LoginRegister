<?php
    require('db.php');
    session_start();
    // Cuando la forma es realizada se llama al método post.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // remueve los backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Comprueba si el usuario existe en la base de datos
        $query    = "SELECT * FROM `users` WHERE username='$username'
                    AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        //se selecciona una sola fila de todos los resultados, num rows
        //obtiene el valor de la cantidad de filas existentes seleccionadas
        //por la query
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            // logged in user usa la función fetch para obtener los
            //resultados de la query y así buscar el parametro usertype
            //si este es igual al valor 'Admin' se redirigirá al dashboard
            $logged_in_user = mysqli_fetch_assoc($result);
            if($logged_in_user['usertype'] == 'Admin'){
                // Redirige a la pagina dashboard ya que se identificó como 'Admin'
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
            }
            else{
                $_SESSION['username'] = $username;
                // Redirige a la pagina inventory ya que se identificó como 'Staff'
                header("Location: inventory.php");
            }
        } 
        else {
            echo "<script>alert('Nombre de usuario/Contraseña incorrecto')</script>";
        }
    } 
?>