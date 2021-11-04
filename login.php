<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100;0,400;1,100&display=swap" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <div id="login">
  <div id="caja_log"> 
  <div class="img_centro">
    <a href="index.php">
     <img src="img/miyagi_do.png" alt=""> 
    </a>
  </div>
    <div class="bienvenido">
      <h2>Bienvenido</h2>
    </div>
  <div class="form_centrado">
    <form action="sesion.php" method="post">
    <input type="text" name="usuario" id="usuario" required placeholder="Usuario"> 
    <br>
    <input type="password" id="password" name="password" required placeholder="Password">
    <br>
    <div class="btn_centrado btn_naranja">
<input type="submit" value="Iniciar sesion">
    </div>
    </form>
  </div>

  <?php
    $errorusuario=isset($_GET["errorusuario"]);
    if($errorusuario == "SI"){
      echo ' <p> Datos incorrectos </p> <br> ';
    }
    ?>

  </div>
  </div>
</body>
</html>