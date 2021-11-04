<?php

require "conexion.php";

$usuario = $_POST ['usuario'];
$pass = $_POST ['password'];

// echo $pass;
// echo $usuario;

$verificar_usuario = mysqli_query($conectar, "SELECT * FROM maestro where user = '$usuario' and contra = '$pass' ");


if (mysqli_num_rows($verificar_usuario) > 0)
{
  session_start();
  $_SESSION['user']= $usuario;
  $_SESSION['autentificado'] ="SI";
  echo '
  <script>
    alert("sesion iniciada");
    location.href="alumnos.php";
  </script>
';
}
else
{
  header("Location: login.php?errorusuario=SI");
}
 
?>