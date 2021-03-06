<?php
include('php/session.php');
  $iniciar = 'Iniciar Sesión / Registrase';
  $cerrar = '<span class="icon icon-cheveron-down"></span>';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="final.css"/>
    <link rel="stylesheet" href="../style.css" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>Capacitación Robótica</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/kuayolo-icon.png"/>
</head>
<body>
  <!--barra de navegación-->
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-4 list-none text-black bg-gray-400 m-2">
      <div class="flex items-center flex-shrink-0 lg:hidden">
        <a href="inicio.php"><img src="img/kuayolo.png" width="150" height="50"></a>
      </div>
      <div class="block lg:hidden">
        <button id="boton" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-black hover:border-black">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
          </svg>
        </button>
      </div>
      <ul id="menu" class="w-full hidden flex-grow lg:flex lg:flex-wrap lg:items-center lg:w-auto">
        <ul class="text-sm lg:text-2xl lg:flex-grow space-x-5">
          <li><a href="nosotros.html" class="formato text-teal-200">Nosotros</a></li>
          <li><a href="mision-vision.html" class="formato text-teal-200">Misión & Visión</a></li>
          <li><a href="contactanos.html" class="formato text-teal-200">Contactanos</a></li>
          <li><a href="inicio.php">
            <img src="img/kuayolo.png" width="200" height="100" class="hidden lg:block">
          </a></li>
          <li><a href="valores.html" class="formato text-teal-200">Valores</a></li>
          <li class="submenu"><a href="#" class="formato text-teal-200">Cursos<span class="icon icon-cheveron-down"></span></a>
            <ul class="bg-gray-400 lg:text-base space-y-2.5 m-2 p-3.5">
              <li><a href="diseño.html" class="icon icon-color-palette hover:text-blue-300"> Diseño 3D</a></li>
              <li><a href="mecanica.html" class="icon icon-cog hover:text-blue-300"> Mecánica</a></li>
              <li><a href="programacion.html" class="icon icon-code hover:text-blue-300"> Programación</a></li>
            </ul>
          </li>
          <li><a href="inicio-registro.php" class="formato text-teal-200">
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
              <li><a href="../perfil/perfil.php" class="icon icon-user-solid-circle hover:text-blue-300"> Perfil</a></li>
              <li><a href="../perfil/editar_perfil.php" class="icon icon-user-solid-circle hover:text-blue-300"> Editar perfil</a></li>
              <li><a href="ayuda.php" class="icon icon-help-circle hover:text-blue-300"> Ayuda</a></li>
              <li><a href="php/cerrar_sesion.php" class="icon icon-log-out hover:text-blue-300"> Cerrar sesión</a></li>
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
    <!--texto-->
    <div id="cuerpo_pag">
    <section class="p-5 w-full block font-bold">
      <h2 class="text-center">¡Bienvenido!</h2>
      <h1 class="lg:w-1/2 flex">Queremos darte la más cordial bienvenida a estos cursos digitales; una filosofía que promueve una educación armónica, integral y por competencias tendente al desarrollo no sólo académico, sino también a la formación de valores para afrontar la vida diaria.<br/>¿No cuentas con los conocimientos de mecánica, diseño programación? ¡no te preocupes! En este curso, aplicarás los conocimientos básicos para construir y controlar robots. Parece complicado, pero no se preocupe, lo encontrará muy simple. El único requisito es que esté interesado en aprender sobre robots.</h1>
    </section>
  <!--slider imagenes-->
    <div class="container-slider">
      <div class="cambio" id="slider">
        <div class="slider__section flex">
          <div class="justify-center">
            <h1 class="my-28 text-center font-black">Diseño 3D<br/>Aprende diseño 3D en Autodesk Inventor<br/>
              <p></p><br/>
            <button class="btn btn-green text-center">
              <a href="diseño.html">Click me</a> 
            </button></h1>
        </div>
          <img src="img/render-robot.jpeg"class="slider__img">
        </div>
        <div class="slider__section flex">
          <h1 class="my-28 m-5 text-center font-black">Mecanica<br/>Aprende a ensamblar un Robot<br/>
            <p></p><br/>
          <button class="btn btn-green text-center">
            <a href="mecanica.html">Click me</a> 
          </button></h1>
          <img src="img/mecanica-1.jpg"class="slider__img">
        </div>
        <div class="slider__section flex">
          <h1 class="my-28 m-5 text-center font-black">Programación<br/>Aprende a programar un Robot<br/>
            <p></p><br/>
          <button class="btn btn-green text-center">
            <a href="programacion.html">Click me</a> 
          </button></h1>
          <img src="img/programar.png"class="slider__img">
        </div>
      </div>
      <div class="slider__btn slider__btn--right icon icon-cheveron-right" id="btn-right"></div>
      <div class="slider__btn slider__btn--left icon icon-cheveron-left" id="btn-left"></div>
    </div>
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
    <script src="app.js"></script>
    <script src="slider.js"></script>
</body>
</html>