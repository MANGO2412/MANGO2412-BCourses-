<?php
   include('src/logic/session.php');
   if($menuStundent){
    echo "si existe el usuario";
     header('location: home.php');
   }

?>


<!DOCTYPE html>
<html lang= "es">
  <head>
      <title>Coursethon</title>
      <link rel="stylesheet" href="src/styles/register.css" type="text/css"/>
  </head>
  <body>
    <header>
      <!-- logo de la imagen -->
      <img class="img00" src="src/img/imgPage/logo1.png" alt="logo de la pagina">
      <!-- si el usuario tiene cuenta -->
      <p>¿ya tienes cuenta? <a href="iniciarsesion.php">inicia sesion</a></p> 
     </header>
        <form class="form-register" action="src/logic/server.php?activity=register" method="post">
           <h4 class="Titulo_registro">Regístrate y comienza a aprender</h4>
           <input class="controls" type="text" name="name" id="nombres" maxlength="30" placeholder="Nombre" required>
            
            <input class="controls" type="text" name="firstN"  id="nombres" maxlength="30" placeholder="Primer apellido" required>

            <input class="controls" type="text" name="lastN" required id="nombres" maxlength="30"  placeholder="Segundo apellido">

            <input class="controls" type="text" name="tel" required id="telef" placeholder="Numero de telefono">

            <input class="controls" type="email" required name="email" id="Correo" maxlength="256"  placeholder="Correo electronico">

           <input  class="controls" type="password" required name="passw" minlenght="8"  maxlength="256"  id="contraseña" placeholder="Contraseña">
           
            <input   class="controls" type="password" required  minlenght="8" maxlength="256"  id="contraseña" placeholder="Vuelva a introducir su contraseña">
           
            <input class="boton" type="submit" value="Registrate">
        </form>
  </body>
</html>
  

	
