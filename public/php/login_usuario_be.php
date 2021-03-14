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
        /*
        echo "<br/>";
        echo $username;
        echo "<br/>";
        echo $password;
        echo "<br/>";
        echo $coreo;
        echo "<br/>";
        echo $nombre_completo;
        */
    //$counter=mysqli_num_rows($query);
    if(mysqli_num_rows($query) == mysqli_num_rows($query) ) {
        $_SESSION['usuario'] = $username;
        $user_check=$_SESSION['usuario'];
        $ses_sql=mysqli_query($conexion, "SELECT correo FROM usuarios WHERE correo='$user_check'");
        $row = mysqli_fetch_assoc($ses_sql);
        $login_session =$row['correo'];
        echo '
        <script>
            alert("Bienvenido"); 
            window.location = "../inicio.php";
        </script>
        '; 
        if(!isset($login_session)){
            mysqli_close($conexion); // Cerrando la conexion
            }
    }else{
        echo '
            <script>
                alert("Usuario no existente, por favor verificar los datos introducidos");
                window.location = "../inicio-registro.php";
            </script>
            ';
    }

?>