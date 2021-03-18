<?php
	include("../public/php/conexion_be.php");  
    include('../public/php/session.php');
  
    $iniciar = 'Iniciar Sesión / Registrase';
    $cerrar = '<span class="icon icon-cheveron-down"></span>';
    $query_empresa=mysqli_query($conexion,"SELECT * FROM usuarios WHERE id=1");
    $row=mysqli_fetch_array($query_empresa);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apock web design</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../public/final.css"/>
    <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <!--======================================
=            Apock web design            =
=======================================
Gracias por utilizar mi contenido!
Me siento agradecido compartiendo para Uds
No olvides seguirme en:
👉 Instagram - https://www.instagram.com/ApockGraficos
👉 Twitter - https://twitter.com/ApockGraficos
👉 Faccobook - https://www.facebook.com/ApockGraficos
====-->

<style type="text/css">
html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}

/*=====================================
estilos de la utilidad
Copiar esto
=====================================*/
.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
}

.seccion-perfil-usuario .perfil-usuario-header {
    width: 100%;
    display: flex;
    justify-content: center;
    background: linear-gradient(#B873FF, transparent);
    margin-bottom: 1.25rem;
}

.seccion-perfil-usuario .perfil-usuario-portada {
    display: block;
    position: relative;
    width: 90%;
    height: 17rem;
    border-radius: 0 0 20px 20px;
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    top: 10px;
    width: 300px;
    height: 300px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #DFE5F2;
    border-radius: 50%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    left: calc(50% - 150px);
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    height: 100%;
    position: relative;
    border-radius: 50%;
}

.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 1000;
}

.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: 0.5rem;
}
.seccion-perfil-usuario .perfil-usuario-footer,
.seccion-perfil-usuario .perfil-usuario-bio {
    /*isplay: flex;
    flex-wrap: wrap;*/
    padding: 1.5rem 2rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 100%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
}

.seccion-perfil-usuario .lista-datos {
    width: 100%;
    text-align: center;
    list-style: none;
}

/* adactacion a dispositivos */
@media (max-width: 750px) {
    .seccion-perfil-usuario .lista-datos {
        width: 100%;
    }

    .seccion-perfil-usuario .perfil-usuario-portada,
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 95%;
    }
}
</style>
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
      <ul id="menu" class="z-10 w-full flex-grow md:hidden lg:flex lg:flex-wrap lg:items-center lg:w-auto">
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
                <li><a href="editar_perfil.php" class="icon icon-user-solid-circle hover:text-blue-300"> Editar perfil</a></li>
              <li><a href="../public/ayuda.php" class="icon icon-help-circle hover:text-blue-300"> Ayuda</a></li>
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
<!--cuerpo html-->
    <section class="seccion-perfil-usuario z-0">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
					        <img class="img-responsive" src="<?php echo $row['logo_url'];?>" alt="Perfil">
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <tr>
                    <h1 class="titulo"><?php echo $row['usuario']?></h1>
                </tr>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <tbody>
                        <tr>
                            <td class='col-md-3'>Nombre completo:</td>
                            <h1><?php echo $row['nombre_completo']?></h1><br/>
                        </tr>
                        <tr>
                            <td>Celular:</td>
                            <h1><?php echo $row['celular']?></h1><br/>
                        </tr>
                        <tr>
                            <td>Correo electrónico:</td>
                            <h1><?php echo $row['correo']?></h1><br/>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Fecha de Nacimiento:</td>
                            <h1><?php echo $row['fecha_nac']?></h1><br/>
                        </tr>  
                        <tr>
                            <td>Genero:</td>
                            <h1><?php echo $row['genero']?></h1><br/>
                        </tr> 
                        <tr>
                        <td>Idioma(s) dominados:</td>
                            <h1><?php echo $row['idioma']?></h1>
                        </tr>
                    </tbody>
                </ul>
            </div>
        </div>
    </section>
    <!--====  End of html  ====-->
<style>
.mensaje a {
    color: inherit;
    margin-right: .5rem;
    display: inline-block;
}
.mensaje a:hover {
    color: #309B76;
    transform: scale(1.4)
}
</style>
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