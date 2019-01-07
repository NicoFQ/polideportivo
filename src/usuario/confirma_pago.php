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

    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/reservaClases.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">

</head>
<body>
    <?= header_usuarios();?>
    <div class="container">
        <main class="jumbotron">
            <div class="row">
            <h2 class="text-center text-uppercase">Confirmación de método de pago.</h2>
                <form action="main_usuario.php" method="post" class="col-md-6">
                    <div class="row metodo-pago">
                        <div class="col-md-2 col-md-offset-4">
                            <i class="fab fa-cc-paypal"></i>
                        </div>
                        <div class="col-md-6"">
                            <input type="radio" name="metodo_pago" >
                            Paypal.
                        </div>
                    </div>
                    
                    <div class="row metodo-pago">
                        <div class="col-md-2 col-md-offset-4">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="metodo_pago" >
                            Tarjeta de Crédito.
                        </div>
                    </div>

                    <div class="row metodo-pago">
                        <div class="col-md-2 col-md-offset-4">
                        <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="metodo_pago" >
                            Pago en recepción.
                        </div>
                    </div>

                </form>            
                <div class="col-md-6 text-center">
                    <div class="caja-precio">
                        <h3 class="text-uppercase">Importe Total.</h3>
                        <p>17€</p>
                    </div>
                </div>
                
            </div>
                <a href="main_usuario.php" class="btn btn-primary btn-block">Confirmar Pago</a>
            <!-- Pasos de reserva / footer -->
            <div class="pasos-reserva">
                <div class="row">
                <div class="col-md-7 col-md-offset-3">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4"><span class="circulo ">1</span></div>
                        <div class="col-md-4"><span class="circulo ">2</span></div>
                        <div class="col-md-4"><span class="circulo paso-actual">3</span></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </main>
    </div>
    <?= footer()?>
</body>
</html>