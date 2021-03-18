<?php
	if (empty($_POST['nombre_completo'])) {
           $errors[] = "nombre_completo esta vacío";
        }else if (empty($_POST['usuario'])) {
           $errors[] = "usuario esta vacío";
        } else if (empty($_POST['correo'])) {
           $errors[] = "correo esta vacío";
        } else if (empty($_POST['celular'])) {
           $errors[] = "celular esta vacío";
        } else if (empty($_POST['fecha_nac'])) {
           $errors[] = "fecha_nac esta vacío";
        } else if (empty($_POST['genero'])) {
           $errors[] = "genero esta vacío";
        } else if (empty($_POST['idioma'])) {
           $errors[] = "idioma esta vacío";
        }   else if (
			!empty($_POST['nombre_completo']) &&
			!empty($_POST['usuario']) &&
			!empty($_POST['correo']) &&
			!empty($_POST['celular']) &&
			!empty($_POST['fecha_nac']) &&
			!empty($_POST['genero']) &&
			!empty($_POST['idioma'])
		){
		/* Connect To Database*/
		include("../../public/php/conexion_be.php"); 
		include('../../public/php/session.php'); 
		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre_completo=mysqli_real_escape_string($conexion,(strip_tags($_POST["nombre_completo"],ENT_QUOTES)));
		$usuario=mysqli_real_escape_string($conexion,(strip_tags($_POST["usuario"],ENT_QUOTES)));
		$correo=mysqli_real_escape_string($conexion,(strip_tags($_POST["correo"],ENT_QUOTES)));
		$contrasena=mysqli_real_escape_string($conexion,(strip_tags($_POST["contrasena"],ENT_QUOTES)));
		$celular=mysqli_real_escape_string($conexion,(strip_tags($_POST["celular"],ENT_QUOTES)));
		$fecha_nac=mysqli_real_escape_string($conexion,(strip_tags($_POST["fecha_nac"],ENT_QUOTES)));
		$genero=mysqli_real_escape_string($conexion,(strip_tags($_POST["genero"],ENT_QUOTES)));
		$idioma=mysqli_real_escape_string($conexion,(strip_tags($_POST["idioma"],ENT_QUOTES)));
		
		$sql="UPDATE usuarios SET nombre_completo='".$nombre_completo."', usuario='".$usuario."', correo='".$correo."', contrasena='".$contrasena."', celular='".$celular."', fecha_nac='".$fecha_nac."', idioma='".$idioma."', genero='".$genero."'WHERE id='1'";
		$query_update = mysqli_query($conexion,$sql);
			if ($query_update){
				$messages[] = "Datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>