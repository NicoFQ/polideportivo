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

    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
    <link rel="stylesheet" href="../../public/css/reserva_pista.css">
</head>
<body>
    <?= header_usuarios()?>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <main class=jumbotron>
              <h2 class="text-center text-uppercase">Reserva de pistas.</h2>
            <form action="confirma_datos.php"method="post">

              <div class="form-group row">
                <label for="clases" class="col-sm-2 col-form-label">Fecha</label>
                <div class="col-sm-10">
                  <input type="date" name="fecha" min="01-01-2019" class="form-control">
                </div>
              </div>

               <div class="form-group row">
                <label for="clases" class="col-sm-2 col-form-label">Deportes</label>
                <div class="col-sm-10">
                  <select name="clases" class="form-control">
                    <option value="padel">Padel</option>
                    <option value="tenis">Tenis</option>
                    <option value="baloncesto">Baloncesto</option>
                    <option value="futbol">Futbol</option>
                  </select>
                </div>
              </div>
                <div class="form-group row">
                <label for="clases" class="col-sm-2 col-form-label">Horario</label>
                <div class="col-sm-10">
                  <select name="clases" class="form-control" multiple>
                    <option value="9">9:00 a 9:59</option>
                    <option value="11">11:00 a 11:59</option>
                    <option value="16">16:00 a 16:59</option>
                    <option value="19">19:00 a 19:59</option>
                  </select>
                </div>
              </div>

              <input type="submit" value="Enviar" class="btn btn-primary btn-block">

              <div class="pasos-reserva">
                <div class="row">
                  <div class="col-md-7 col-md-offset-3">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-4"><span class="circulo paso-actual">1</span></div>
                        <div class="col-md-4"><span class="circulo">2</span></div>
                        <div class="col-md-4"><span class="circulo">3</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              
            </form>
              
            </main>
          </div>
        </div>
    </div>
    <?= footer()?>
</body>
</html>