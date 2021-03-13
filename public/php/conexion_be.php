<?php

    $conexion = @mysqli_connect('localhost', 'root', '', 'login_register_db');
    
    /*if ($conexion) {
        echo 'Conectado exitosamente a la base de Datos';
        
    }*/
    if(!$conexion){
        die("imposible conectarse: ".mysqli_error($conexion));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>