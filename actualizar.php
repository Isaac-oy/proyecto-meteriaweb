<?php
require "conexion.php";

$id= $_POST ['id'];
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

$actualizar="UPDATE alumnos SET nombre='$name', celular='$contact', dia='$dia',mes='$mes',anio='$anio', tipo='$sangre', alergia='$alergia', parent_name='$p_name',parent_num='$p_cel', parent='$parent' WHERE id = '$id'";

$query = mysqli_query($conectar, $actualizar);

if ($query) {
  # code...
  echo '
    <script>
      alert("SI SE GUARDO LOS DATOS CORRECTAMENTE");
      location.href="alumnos.php";
    </script>
  ';
}else {
  # code...
  echo '
  <script>
    alert("NO SE GUARDO LOS DATOS");
    location.href="editar.php;
  </script>
';
}


?>