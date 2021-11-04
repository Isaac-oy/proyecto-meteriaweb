<?php
require "conexion.php";
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <script src="https://kit.fontawesome.com/a03a05c770.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100;0,400;1,100&display=swap" rel="stylesheet">
  <title>Editar</title>
</head>
<body>
<div id="agregar">
  <div class="contenedor_agg">

    <div class="icono_amarillo">
      <a href="alumnos.php"><i class="fas fa-arrow-circle-left fa-3x"></i></a>
    </div>
    <div id="contenedor_4" class="fondo_blur borde_redondo">
       <span class="negritas">
        <h2> Editar datos</h2>
      </span> 
      <?php
   $verdatos = "SELECT * FROM alumnos WHERE id='$id'";
    $result = mysqli_query($conectar, $verdatos);
    $row = mysqli_fetch_assoc($result);
  ?>
      <hr>
      <br>
      <form action="actualizar.php" method="post">
         <div class="caja_flex">
           
            <div class="datos_a"> 
              
              <h4>Datos del alumno</h4>
              <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" required value="<?php echo $row['nombre']?>">
              <br>
              <input type="tel" name="contacto" id="contacto" placeholder="Numero celular" required pattern="[0-9]{10}" value="<?php echo $row['celular']?>" >
              <br>
          <label for="rfecha">Fecha de nacimiento</label>
            <br>
            <select name="dia" id="">
            <option ><?php echo $row['dia']?></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
        <select name="mes" id="">
        <option ><?php echo $row['mes']?></option>
          <option value="Enero">Ene</option>
          <option value="Febrero">Feb</option>
          <option value="Marzo">Mar</option>
          <option value="Abril">Abr</option>
          <option value="Mayo">May</option>
          <option value="Junio">Jun</option>
          <option value="Julio">Jul</option>
          <option value="Agosto">Ago</option>
          <option value="Septiembre">Sep</option>
          <option value="Octubre">Oct</option>
          <option value="Noviembre">Nov</option>
          <option value="Diciembre">Dic</option>
        </select>
        <select name="anio" id="">
        <option ><?php echo $row['anio']?></option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>
          <option value="1999">1999</option>
        </select>
        <br>
        <input type="text" name="sangre" id="sangre" placeholder="Tipo de sangre" required value="<?php echo $row['tipo']?>">
          <input type="text" name="alergia" id="alergia" placeholder="Alergias" value="<?php echo $row['alergia']?>">           
      
            </div>
            <div class="datos_a">
              <h4>Su contacto de emergencia</h4>
         
               <input type="text" name="enombre" id="enombre" required placeholder="Nombre" value="<?php echo $row['parent_name']?>">
               <br>
               <input type="tel" name="econt" id="econt" required placeholder="Numero de celular" pattern="[0-9]{10}" value="<?php echo $row['parent_num']?>">
               <input type="text" name="parent" id="parent" required placeholder="Parentesco" value="<?php echo $row['parent']?>">
               <br>
               <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
              <input type="submit" value="Actualizar">

            </div>
          </div>
          </form>
    </div>
  </div>
</div>
</body>
</html>