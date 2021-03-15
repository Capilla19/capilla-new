<?php	
	session_start();
	if (!isset($_SESSION['usuario']) AND $_SESSION['usuario'] != 1) {
        header("location: ../public/inicio_registro.php");
		exit;
    }