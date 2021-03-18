<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    //verifica que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0 ) {
        echo '
            <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "../inicio-registro.php";
            </script>
        ';
        exit();
    }
    //verifica que nombre de usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0 ) {
        echo '
            <script>
            alert("Este usuario ya esta registrado, intenta con otro diferente");
            window.location = "../inicio-registro.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../inicio-registro.php";
            </script>
        ';
    }else {
        echo '
            <script>
                alert("Inténtalo de nuevo, usuario no registrado");
                window.location = "../inicio-registro.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>