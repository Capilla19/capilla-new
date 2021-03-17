<?php
	include("../public/php/conexion_be.php");  
    include('../public/php/session.php');
  
    $iniciar = 'Iniciar Sesión / Registrase';
    $cerrar = '<span class="icon icon-cheveron-down"></span>';
    $query_empresa=mysqli_query($conexion,"SELECT * FROM usuarios WHERE id=1");
    $row=mysqli_fetch_array($query_empresa);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/final.css"/>
    <link rel="stylesheet" href="../style.css" />
  	<link rel="stylesheet" href="css/custom.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>Perfil</title>
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/kuayolo-icon.png"/>
  </head>
  <body>
  <!--barra de navegación-->
  <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-4 list-none text-black bg-gray-400 m-2">
      <div class="flex items-center flex-shrink-0 lg:hidden">
        <a href="../public/inicio.php"><img src="../public/img/kuayolo.png" width="150" height="50"></a>
      </div>
      <div class="block lg:hidden">
        <button id="boton" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-black hover:border-black">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
          </svg>
        </button>
      </div>
      <ul id="menu" class="w-full flex-grow md:hidden lg:flex lg:flex-wrap lg:items-center lg:w-auto">
        <ul class="text-sm lg:text-2xl lg:flex-grow space-x-5">
          <li><a href="../public/nosotros.html" class="formato text-teal-200">Nosotros</a></li>
          <li><a href="../public/mision-vision.html" class="formato text-teal-200">Misión & Visión</a></li>
          <li><a href="../public/contactanos.html" class="formato text-teal-200">Contactanos</a></li>
          <li><a href="../public/inicio.php">
            <img src="../public/img/kuayolo.png" width="200" height="100" class="md:hidden lg:block">
          </a></li>
          <li><a href="../public/valores.html" class="formato text-teal-200">Valores</a></li>
          <li class="submenu"><a href="#" class="formato text-teal-200">Cursos<span class="icon icon-cheveron-down"></span></a>
            <ul class="bg-gray-400 lg:text-base space-y-2.5 m-2 p-3.5">
              <li><a href="../public/diseño.html" class="icon icon-color-palette hover:text-blue-300"> Diseño 3D</a></li>
              <li><a href="../public/mecanica.html" class="icon icon-cog hover:text-blue-300"> Mecánica</a></li>
              <li><a href="../public/programacion.html" class="icon icon-code hover:text-blue-300"> Programación</a></li>
            </ul>
          </li>
          <li><a href="../public/inicio-registro.php" class="formato text-teal-200">
            <?php   
              if(!isset($_SESSION ['usuario'])){
                echo $iniciar;
                }
            ?></a></li>
          <li class="submenu"><a href="#" class="formato text-teal-200">
            <?php 
              if(isset($_SESSION ['usuario'])){
                echo $login_session, $cerrar;
                }
            ?></a>
            <ul class="bg-gray-400 lg:text-base space-y-2.5 m-2 p-3.5">
              <!--<li><a href="../perfil/perfil.php" class="icon icon-user-solid-circle hover:text-blue-300"> Perfil</a></li>-->
              <li><a href="" class="icon icon-cog hover:text-blue-300"> Configuración</a></li>
              <li><a href="../public/php/cerrar_sesion.php" class="icon icon-log-out hover:text-blue-300"> Cerrar sesión</a></li>
            </ul>
          </li>
        </ul>
        <!--Buscador-->
        <div id="ctn-icon-search">
          <i class="icon icon-search formato" id="icon-search"></i>
        </div>
        <!--switch modo nocturno-->
        <div class="theme-switch-wrapper hidden lg:inline-block">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="slider round"></div>
            </label>
        </div>
      </ul>
    </nav>
    <div id="ctn-bars-search" class="m-2 hidden">
      <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>
    <ul id="box-search">
      <li><a href="#" class="hover:bg-gray-400"><i class="icon icon-search"></i> Diseño 3D</a></li>
      <li><a href="#" class="hover:bg-gray-400"><i class="icon icon-search"></i> Mecánica</a></li>
      <li><a href="#" class="hover:bg-gray-400"><i class="icon icon-search"></i> Programación</a></li>
      <li><a href="#" class="hover:bg-gray-400"><i class="icon icon-search"></i> Diseño del juego</a></li>
    </ul>
    <!--fondo busqueda--><div id="cover-ctn-search"class="hidden"></div>
<br>
	<br>
	<div class="container">
      <div class="row">
      <form method="post" id="perfil">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >
          <div class="panel panel-success"><br>
              <h2 class="panel-title"><center><font size="5"><i class='glyphicon glyphicon-user'></i>PERFIL</font></center></h2>
            <div class="panel-body">
              <div class="row">			  
                <div class="col-md-3 col-lg-3 " align="center"> 
				<div id="load_img">
					<img class="img-responsive" src="<?php echo $row['logo_url'];?>" alt="Perfil">					
				</div>
				<br>				
					<div class="row">
  						<div class="col-md-12">
							<div class="form-group">
								<input class='filestyle cursor-pointer' data-buttonText="FOTO" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
							</div>
						</div>						
					</div>
				</div>
                <div class=" col-md-9 col-lg-9 text-center"> 
                  <table class="table table-condensed justify-center">
                    <tbody>
                      <tr>
                        <td class='col-md-3'>Nombre completo:</td>
                        <td><input type="text" class="form-control input-sm" name="nombre_completo" value="<?php echo $row['nombre_completo']?>" required></td>
                      </tr>
                      <tr>
                        <td>Usuario:</td>
                        <td><input type="text" class="form-control input-sm" name="usuario" value="<?php echo $row['usuario']?>" required></td>
                      </tr>
                      <tr>
                        <td>Correo electrónico:</td>
                        <td><input type="email" class="form-control input-sm" name="correo" value="<?php echo $row['correo']?>" ></td>
                      </tr>
					  <tr>
                        <td>Contraseña:</td>
                        <td><input type="text" class="form-control input-sm" required name="contrasena" value="<?php echo $row['contrasena']?>"></td>
                      </tr>                     
					  <tr>
                        <td>Celular:</td>
                        <td><input type="text" class="form-control input-sm" required name="celular" value="<?php echo $row['celular']?>"></td>
                      </tr>                     
					  <tr>
                        <td>Fecha de Nacimiento:</td>
                        <td><input type="text" class="form-control input-sm" required name="fecha_nac" value="<?php echo $row['fecha_nac']?>"></td>
                      </tr>                     
					  <tr>
                        <td>Idioma(s) dominados:</td>
                        <td><input type="text" class="form-control input-sm" required name="idioma" value="<?php echo $row['idioma']?>"></td>
                      </tr>                     
					  <tr>
                        <td>Genero:</td>
                        <td><input type="text" class="form-control input-sm" required name="genero" value="<?php echo $row['genero']?>"></td>
                      </tr>                     
                    </tbody>
                  </table>  
                </div>
				<div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
              </div>
            </div>
                <div class="panel-footer text-center">
                    <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-refresh"></i> Actualizar perfil</button>
                </div>
          </div>
        </div>
		</form>
      </div>
	<?php
	include("footer.php");
	?>
<script type="text/javascript" src="js/bootstrap-filestyle.js"> </script>
<script>
$( "#perfil" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_perfil.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('.guardar_datos').attr("disabled", false);

		  }
	});
  event.preventDefault();
})





		
</script>

<script>
		function upload_image(){
				
				var inputFileImage = document.getElementById("imagefile");
				var file = inputFileImage.files[0];
				if( (typeof file === "object") && (file !== null) )
				{
					$("#load_img").text('Cargando...');	
					var data = new FormData();
					data.append('imagefile',file);
					
					
					$.ajax({
						url: "ajax/imagen_ajax.php",        // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#load_img").html(data);
							
						}
					});	
				}
				
				
			}
    </script>

  <!--modo nocturno-->
  <script>
        const colorSwitch = document.querySelector ('.theme-switch input[type="checkbox"]');
        function switchColor(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
            }
        }
        colorSwitch.addEventListener('change', switchColor,false)
    </script>
  <!--píe de página-->
    <footer class="bg-gray-500 text-black p-8 text-center list-none flex flex-wrap m-5">
      <h4 class="font-black text-2xl my-2 w-full">
        Síguenos en nuestras redes sociales para más información
      </h4>
      <div class="w-1/2 text-right px-5 hover:text-blue-400">
        <li class="icon icon-facebook">
          <a href="https://www.facebook.com/UTA-Robotics-1945960895427534"
            > Facebook</a
          >
        </div>
      <div class="w-1/2 text-left px-5 hover:text-pink-300">
        </li>
        <li class="icon icon-instagram">
          <a href="https://www.instagram.com/tal_robotics/"> Instagram</a>
        </li>
      </div>
      <p class="text-center w-full mt-2">
        2021 Cursos de Robótica | Todos los derechos reservados a KUAYOLO
      </p>
    </footer>
    </div>
    <script src="../public/app.js"></script>
    
  </body>
</html>