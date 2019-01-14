<?php
// REQUIRES
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');
 $actividad = null;
 if (isset($_GET['actividad'])) {
 
 switch ($_GET['actividad']) {
   case 'paddel':
    $actividad = $_GET['actividad'];
   break;
          
   case 'tenis':
     $actividad = $_GET['actividad'];
   break;

   case 'natacion':
    $actividad = $_GET['actividad'];
   break;
   }//switch
  }
                      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservas</title>
    <link rel="stylesheet" href="../../public/css/reserva_pista.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">

</head>
<body>
    <?= header_usuarios()?>
    <div class="container">
      <main class="jumbotron">
      <form action="confirma_pago.php" method="post">
        <div class="row">
        <h2 class="text-center text-uppercase">Confirmación de datos.</h2>
        <div class="col-md-9 col-md-offset-3">
        
          <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Nombre:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p>Gonzalo Garcia Manchado</p>
            </div>
          </div>
          <!--CONDICION TEMPORAL PARA LA PRESENTACION. VISTA DESDE RESERVA_CLASES.PHP-->
          <?php  if (is_null($actividad)) { ?>
            <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Actividad:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p>Padel</p>
            </div>
          </div>
         <?php } else { ?>
          <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Actividad:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p> <?= ucfirst($actividad) ?> </p>
            </div>
          </div>

         <?php } ?>

          <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Instalación:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p>P-03</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Fecha:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p>15/01/2019</p>
            </div>
          </div>
          <!--CONDICION TEMPORAL PARA LA PRESENTACION. VISTA DESDE RESERVA_CLASES.PHP-->
          <?php if (!isset($_GET['actividad'])) {?>
          <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Hora:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p>16:00 a 16:59</p>
            </div>
          </div>
          <?php } ?>
          <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Email:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p>g_manchado@gmail.es</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Telefono:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p>616 829 988</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-1 col-md-offset-1">
              <p>
                <span>Precio:</span>
              </p>
            </div>
            <div class="col-md-9 col-md-offset-1">
              <p>15 €</p>
            </div>
          </div>

          
        </div>
        </div>
        <input type="submit" value="Continuar" class="btn btn-primary btn-block">
          <!-- Pasos de reserva / footer -->
          <div class="pasos-reserva">
            <div class="row">
              <div class="col-md-7 col-md-offset-3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-4"><span class="circulo ">1</span></div>
                    <div class="col-md-4"><span class="circulo paso-actual">2</span></div>
                    <div class="col-md-4"><span class="circulo">3</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
      </form>
      </main>
    </div>
    <?= footer()?>
</body>
</html>