<?php

    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0 ) {
        $_SESION ['usuario'] = $correo;
        echo '
        <script>
            alert("Bienvenido");
            window.location = "../inicio.html";
        </script>
        ';
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existente, por favor verificar los datos introducidos");
            window.location = "..inicio-registro.php";
        </script>
        ';
        exit;
    }

?>