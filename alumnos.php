<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a03a05c770.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100;0,400;1,100&display=swap" rel="stylesheet">
<?php
require "conexion.php"
?>
  <title>Lista_alumnos</title>
</head>
<body>
  <div id="alumnos" >
    <div id="encabezado_a">
      <div class="contenedor_a"><h2>Lista de alumnos</h2>
      </div>
      <div class="contenedor_a img_centro">
        <?php
        include "reloj.php"
        ?>

      </div>
      <div class="contenedor_a img_centro">
      <a href="agregar.php">Agregar alumno</a> 
      <a href="exit.php" >Salir</a></div>
      <div class="img_centro">
            <img src="img/miyagi_do.png" alt="">
      </div>
    </div>
<!-- ----------- -->

  
    <div id="datos_alumnos">
            <table>
            <?php
      $todos = "SELECT * FROM alumnos";
      $resultado = mysqli_query($conectar, $todos);
      while ($row = mysqli_fetch_assoc($resultado)){
      ?>
          <tr>
          <td colspan="2">
           <?php echo $row["nombre"]?>
          </td>
          <td>
          <span class="letra_ama">Tipo de sangre: </span>
          <?php echo $row["tipo"]?>
          </td>
          </tr> 
          <tr>
            <td>
                <span class="letra_ama">Fecha de nacimiento </span> <br>
            <?php echo $row["dia"]?>/<?php echo $row["mes"]?>/<?php echo $row["anio"]?>
            </td>
            <td>
            <span class="letra_ama">
            alergia: 
            </span>
            <?php echo $row["alergia"]?>
            </td>
            <td><spam class="letra_ama">
             Numero tel: 
            </spam>
           <?php echo $row["celular"]?> </td>
          </tr> 
          <tr>
          <td colspan="3"> <span class="letra_ama">Datos De emergencia
          </span> </td>
          </tr>
          <tr>
          <td> <span class="letra_ama">
          Nombre del familiar: 
          </span> <?php echo $row["parent_name"]?></td>
          <td>
          <span class="letra_ama">
           Numero tel: 
          </span>
         <?php echo $row["parent_num"]?>
          </td>
          <td> <span class="letra_ama">
          Parentesco: 
          </span> <?php echo $row["parent"]?> </td>
          </tr>
          <tr>
            <td></td>
            <td class="icono_ed"><a href="editar.php?id=<?php echo $row['id']?>"><i class="fas fa-edit fa-2x"></i></a></td>
            <td class="icono_b"><a href="#"  onClick="validar('eliminar.php?id=<?php echo $row["id"]?>')"><i class="fas fa-trash-alt fa-2x"></i></a></td>
          </tr>
          <tr>
          <td colspan="3"> <hr> </td>
          </tr>

          <script>
function validar(url) {
var eliminar = confirm("Realmente deseas Eliminar");
  if (eliminar==true) {
    window.location=url;
  }
}


</script>

      <?php
      }
      mysqli_free_result($resultado);
      ?>
            </table>
    </div>
  </div>

</body>
</html>