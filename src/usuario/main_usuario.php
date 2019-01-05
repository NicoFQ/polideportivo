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
    <title>Home Administrador</title>

    <link rel="stylesheet" href="../../public/css/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/listadoEmpleados.css">
    <link rel="stylesheet" href="../../public/css/mainUsuario.css">
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/footer.css">
    <link rel="stylesheet" href="../../public/css/logo.css">
</head>
<body>
    <?= header_usuarios('admin');?>
        <div class="container">
            <div class="contenedor-imagen" id="imgGallary">
                <h3>Contenido</h3>
                <img src="../../public/img/tennis_bg.jpg" alt="Tennis">
                <img src="../../public/img/swpool_bg.jpg" alt="sw">
                <img src="../../public/img/soccer_bg.jpg" alt="fut">
            </div>
        </div>
    <?= footer();?>

    <script src="../../public/js/slider.js"></script>
</body>
</html>