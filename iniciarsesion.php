<?php
   include('src/logic/session.php');
   if($menuStundent){
    echo "si existe el usuario";
     header('location: home.php');
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/register.css" type="text/css"/>
    <title>Iniciar sesion</title>
</head>
<body>
   <header>
      <!-- logo de la imagen -->
      <img class="img00" src="src/img/imgPage/logo1.png" alt="logo de la pagina">
     </header>

    <form class="form_sesion" action="src/logic/server.php?activity=login" method="post">
        <h4>Inicio de sesion</h4>
       <input class="controls2"  type="text" name="email" placeholder="correo">
       <input class="controls2" type="password" name="passw" placeholder="contraseña">
       <input class="btn_sesion" type="submit" value="Iniciar">
    </form>
</body>
</html>