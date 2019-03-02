<?php
// REQUIRES
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservas</title>
    <link rel="stylesheet" href="../../public/css/reservas.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    <?= header_usuarios()?>
    <div class="container">
      <main>
        <div class="col-md-6 jumbotron">

            <h3 class="text-center">
              <a href="reserva_clase.php">
                Apuntate a nuestras <h2>CLASES</h2>
              </a></h3>

        </div>
        <div class="col-md-6  jumbotron">

            <h3 class="text-center">
              <a href="reserva_pista.php">
                Reserva una 
                <h2>PISTA</h2>
              </a></h3>

         
        </div>
      </main>
    </div>
    <?= footer()?>
</body>
</html>