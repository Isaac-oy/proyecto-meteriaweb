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
  <title>miyagi-do</title>
</head>
<body>
    <div class="caja_flex" id="encabezado">
    <div id="title">
      <span class = "letra_ac">
        <h1>Miyagi-do</h1><br>
        <h2>karate</h2>
      </span>
    </div>
    <div id="contenedor_1">
      <div class = "icono"> 
        <a href="login.php">
          <i class="fas fa-portrait fa-2x"></i>  
        </a>
      </div>
      <div class="caja_img">
        <img src="img/logo.png" alt="">
      </div>
    </div>
    </div>
    <!-- ------- -->
    <div id="contenedor_2">
        <div class="caja_flex">
          <div class="text">
            <div class="bordes">
            <h2>
              Sobre el karate
            </h2>
            <hr>
            </div>
            <br>
            <br>
            <p>
            El Karate es un arte marcial japonés en el que se permiten puñetazos, patadas, golpes de codo y rodilla así como los golpes de mano abierta (o «manos cuchillo»)
            <br>
            Como ocurre con el resto de Deportes Marciales, el fin último del Karate Deportivo no es hacer daño al rival, sino vencerlo según un sistema de puntuación establecido y utilizando técnicas específicas.
            </p>
          </div>       
           <div class="foto_hover">
            <img src="img/karate_1.jpg" alt="">
          </div>
        </div>
    </div>
    <div id="contenedor_3">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,32L288,64L576,64L864,128L1152,192L1440,0L1440,0L1152,0L864,0L576,0L288,0L0,0Z"></path></svg>
      <div class="datos_1">
        <h2>Sobre nosotros</h2>
        <br>
        <div class="caja_flex">
          <div class="contenedor_s">
            <h3>Quienes somos</h3>
            <br>
            <p>
Miyagi Do Karate es una escuela de Karate ubicada en Sydney, Australia. En Miyagi Do Karate practicamos el estilo de Goju Ryu creado por Miyagi Chojun Sensei en Okinawa, Japón. Es un sistema de lucha cuerpo a cuerpo que tiene el mismo enfoque en técnicas duras (Go) y blandas (Ju).
            </p>
          </div>
          <div class="contenedor_s">
            <h3>Nuestras reglas</h3>
            <br>
            <p>
            &#9658; El karate no hace el primer movimiento
            <br>
            <br>
            &#9658; Primero aprende la regla número 1
            </p>
          </div>
          <div class="contenedor_s">
            <h3>Clases</h3>
            <br>
            <p>
              contamos con clases de lunes a viernes <br>
              en turno vespertino <span class="negritas">(8:00am-12:00pm)</span> <br>
              y en vesperino <span class="negritas">
                (2:00pm-6:00pm)
              </span> 
            </p>
          </div>
        </div>
        <br><br>
        <div class="ubicacion caja_flex">
        <h2>
        Nos <br>
        Ubicamos
        </h2>
       
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126155.22522654377!2d151.06740011181455!3d-33.80950924412411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12af6715af19d7%3A0xac17712b1c08a73f!2sMiyagi%20Do%20Karate!5e0!3m2!1ses-419!2smx!4v1623199130373!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div id="video" class="caja_flex" >
        <iframe width="560" height="315" src="https://www.youtube.com/embed/E9bhaMdMjQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <h3>
          “Para hacer miel, <br> una abeja joven necesita una <br> flor joven, no una pasa vieja.”
          </h3>
        </div>
      </div>
      <div class="svg_3" >
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,256L360,96L720,160L1080,192L1440,96L1440,320L1080,320L720,320L360,320L0,320Z"></path></svg>
      </div>
    </div>    

    <!-- --------- -->
    <div id="contenedor_4">
       <span class="negritas">
        <h2> Registrate ahora!</h2>
        <h3>tenemos lugar para ti!!</h3>
      </span> 
      <hr>
      <br>
      <form action="guardar.php" method="post">
         <div class="caja_flex">
           
            <div class="datos_a"> 
              
              <h4>Tus Datos</h4>
              <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" required >
              <br>
              <input type="tel" name="contacto" id="contacto" placeholder="Numero celular" required pattern="[0-9]{10}" >
              <br>
          <label for="rfecha">Fecha de nacimiento</label>
            <br>
  

          <select name="dia" id="">
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
        <input type="text" name="sangre" id="sangre" placeholder="Tipo de sangre" required>
          <input type="text" name="alergia" id="alergia" placeholder="Alergias">           
      
            </div>
            <div class="datos_a">
              <h4>A quien contactar en caso de emergencia?</h4>
         
               <input type="text" name="enombre" id="enombre" required placeholder="Nombre">
               <br>
               <input type="tel" name="econt" id="econt" required placeholder="Numero de celular" pattern="[0-9]{10}" >
               <input type="text" name="parent" id="parent" required placeholder="Parentesco">
               <br>
              <input type="submit" value="Enviar">

            </div>
          </div>
          </form>
    </div>
    <!-- -------------- -->
        <?php
        include "pie.php"
        ?>
</body>
</html>