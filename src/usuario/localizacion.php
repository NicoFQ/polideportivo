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
    <title>Noticias</title>

    <link rel="stylesheet" href="../../public/css/localizacion.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    <?= header_usuarios()?>
    <div class="container">
        <div class="col-md-4">
            <h4>Estamos ubicados en: </h4>
            <p>Calle toledo 54 28012 - Madrid</p>
            <p>Horario: Lunes a viernes de 08:00 a 20:00.</p>

        </div>

        <div class="col-md-8">
           <figcaption class="text-right">
                    <figure>
                        <img src="./../../public/img/localizacion.png">
                    </figure>
                </figcaption>
        </div>
    </div>
    <?= footer()?>
</body>
</html>
