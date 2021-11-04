<?php
require "conexion.php";

$name = $_POST ['nombre'];
$contact = $_POST ['contacto'];
$dia = $_POST['dia'];
$mes = $_POST ['mes'];
$anio = $_POST['anio'];
$sangre = $_POST ['sangre'];
$alergia = $_POST ['alergia'];
$p_name= $_POST ['enombre'];
$p_cel= $_POST ['econt'];
$parent= $_POST ['parent'];



$insertar = "INSERT INTO alumnos(nombre, celular, dia,mes,anio, tipo, alergia, parent_name,parent_num, parent) VALUES ('$name','$contact', '$dia','$mes','$anio','$sangre','$alergia','$p_name','$p_cel','$parent') " ;

$query = mysqli_query($conectar, $insertar);

if ($query) {
  # code...
  echo '
    <script>
      alert("SI SE GUARDO LOS DATOS CORRECTAMENTE");
      location.href="index.php";
    </script>
  ';
}else {
  # code...
  echo '
  <script>
    alert("NO SE GUARDO LOS DATOS");
  </script>
';
}

?>