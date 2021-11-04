<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reloj.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100;0,400;1,100&display=swap" rel="stylesheet">
</head>
<body>
<div class="widget">
  <div class="fecha">
  <p id="diaSemana" class="diaSemana"></p>
  <p id="dia" class="dia"></p>
  <p>de</p>
  <p class="mes" id="mes"></p>
  <p>del</p>
  <p class="year" id="year"></p>
  </div>
  <div class="reloj">
  <p id="horas" class="horas"></p>
  <p>:</p>
  <p id="min" class="min"></p>

  <p class="ampm" id="ampm"></p>

  </div>
</div>
<script src="reloj.js"></script>
</body>
</html>