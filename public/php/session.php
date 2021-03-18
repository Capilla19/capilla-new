<?php
// Estableciendo la conexion a la base de datos
include("conexion_be.php");
session_start();// Iniciando Sesion
// Guardando la sesion
// SQL Query para completar la informacion del usuario
if(isset($_SESSION ['usuario'])){
    $user_check=$_SESSION['usuario'];
    $ses_sql=mysqli_query($conexion, "SELECT correo FROM usuarios WHERE correo='$user_check'");
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session =$row['correo'];
    if(!isset($login_session)){
    mysqli_close($conexion); // Cerrando la conexion
    }
}
?>