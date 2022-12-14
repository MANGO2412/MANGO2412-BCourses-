<?php
   include('src/logic/session.php');
   if($menuStundent){
     header('location: home.php');
   }else if($menuMaestro){
    header('location: home.php?menu=c_asignado');
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/styles/principal.css">
    <title>Inicio</title>
</head>
<body>
  <!-- el encabezado de la pagina -->
   <header class="header">
     <!-- logo de la pagina -->
       <div class="logo">
          <img src="src/img/logo1.png">
       </div>
      
       <!-- menu de navegacion -->
      <nav>
          <ul class="botones">
            <li><a href="iniciarsesion.php">Inicia Sesion</a></li>
            <li><a href="registrate.php">Registrate</a></li>
         </ul>
      </nav>
   </header> 
   <!-- contenido de la pagina -->
   <section id="dividida">
       <div class = izq>
           <h2>Estudia cuando quieras y  donde quieras</h2> 
           <p class="p1">¡ Elige la hora y el momento que quieras, para tomar tus cursos en linea !</p>
           <p class="p2">Somos una empresa que se encarga de poder brindar a las personas un sitio para poder llevar acabo sus cursos de manera online</p>    
       <a href="registrate.php">Registrate</a>
       <a href="home.php">Ver cursos disponibles</a>
     </div>
     <div class = der></div>
   </section>
   <section class="frase">
       <div>
       <p class="hola">Explora nuestros cursos mas interesantes </p>
       </div>
   </section>
    <!-- cursos -->
    <section id="cursos"></section>

     <footer class="pie_pagina">

        <ul>
         <li>¿Quienes somos?</li>
         <li>Ponte en contacto con nosotros</li>
         <li>Enseña en Bcourses</li>
        </ul>

        <ul>
          <?php
            $fechaActual = date('y-m-d');
            echo $fechaActual;
          ?>
          <li>Blog</li>
          <li>Redes sociales:
           <ul>
             <li>facebook</li>
             <li>Instagram</li>
             <li>You tube</li>
           </ul>
          </li>
        </ul>
     </footer>

    <!-- script -->
    <script src="src/logic/scripts/jquery-3.6.1.min.js"></script>
    <script src="src/logic/scripts/main.js"></script>
</body>
</html>