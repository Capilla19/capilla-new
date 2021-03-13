<?php
    session_start();
        // Define $username y $password
        $username=$_POST['correo'];
        $password=$_POST['contrasena'];
        // Estableciendo la conexion a la base de datos    
        include ("conexion_be.php");
        // Para proteger de Inyecciones SQL 
        $username    = mysqli_real_escape_string($conexion,(strip_tags($username,ENT_QUOTES)));
        $sql = "SELECT correo, contrasena FROM usuarios WHERE correo = '$username ' and contrasena='$password'";
        $query=mysqli_query($conexion,$sql);
        echo "<br/>";
        echo $username;
        echo "<br/>";
        echo $password;
        //$counter=mysqli_num_rows($query);
        if(mysqli_num_rows($query) == mysqli_num_rows($query) ) {
            $_SESSION['usuario'] = $username;
            echo '
            <script>
                alert("Bienvenido");
                window.location = "bienvenida.php";
            </script>
            '; 
        }
        else {
        }
    
    /*$correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($consulta) == mysqli_num_rows($consulta) ) {
        $_SESION ['usuario'] = $correo;
        echo '<br/>';
        echo $correo ; 
        echo '<br/>';
        echo $contrasena ;
        echo '
        <script>
            alert("Bienvenido");
            window.location = "bienvenida.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Usuario no existente, por favor verificar los datos introducidos");
            window.location = "inicio-registro.php";
        </script>
        ';
    }

    /*if(mysqli_num_rows($consulta) > 0 ) {
        $_SESION ['usuario'] = $usuario;
        echo $correo;
        echo $contrasena;
    }else{
    }*/

?>