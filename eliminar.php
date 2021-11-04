<?php
require "conexion.php";
$id = $_GET["id"];
echo $id;
$eliminar = "DELETE FROM alumnos where id = '$id'";
$res = mysqli_query($conectar,$eliminar);

if ($res) {
  # code...
  header("Location:alumnos.php");
}else{

  echo "no se elimino";
}
?>