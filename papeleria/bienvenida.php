<?php 
    include('session.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenida</title>
</head>
<body>
    <h1>hola</h1>
    <a href="cerrar_sesion.php">cerrar sesion</a>
    <h3>Bienvenid@ al sistema  <i><?php echo $login_session; ?></i></h3>
</body>
</html>