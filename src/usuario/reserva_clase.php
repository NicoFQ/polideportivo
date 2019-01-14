<?php
// REQUIRES
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

function noticia($encabezado,$subtitulo,$img)
{ $hoy = date('l, d M Y');?>
    <article>
        <h2 class="text-center"><?= $encabezado?></h2>
        <!--<h3><?= $subtitulo?></h3>-->
        <!--<p><?= $hoy?></p>-->
        <div class="contenido-noticia">
           <a href="confirma_datos_clase.php?actividad=<?= $img?>"><img src="../../public/img/reserva_clases/<?= $img?>.jpg" alt="<?= $img?>"></a>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut esse ipsam nostrum, a accusamus nihil nulla impedit odit velit eligendi itaque minus quas, omnis blanditiis corrupti, magnam cupiditate. Cupiditate?Dignissimos obcaecati numquam corporis, maxime eos quos magnam, est fugiat doloribus ad pariatur, laborum voluptate hic tempora porro minima qui quia! Nesciunt dicta quas neque non excepturi! Nesciunt, autem esse.
            </p>
            <p> Profesores: <a href="../profesor/mi_perfil.php">Alvaro Péres</a> </p>
        </div>
    </article>
    <hr>
<?php }//noticia ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
    article{
        float: left;
        margin:10px 0;
        box-shadow: 0px 0px 15px gray;
        padding: 10px;
    }
    article > h2 {
        text-transform: uppercase;
        background-color: #10ac84;
        color:white;
        padding: 8px 0;
    }
    article >h2 + h3 > p:first-of-type{
        text-decoration: underline;
        color:#10ac84;
    }
    article img{
        width: 250px;
        height: 150px;
        float: left;
        border:solid 2px #10ac84;
        margin:0 15px 0 0;
    }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>

   <!-- <link rel="stylesheet" href="../../public/css/noticias.css">-->
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>

    <?= header_usuarios()?>
    <div class="container">
        <h1 class="text-center text-uppercase">Clases disponibles</h1>
        <?= noticia("Clases Padel","Apertura de la nueva pista de padel.","padel")?>
        <?= noticia("Clases Tenis","Abierta inscripcion para el torneo de Tenis.","tenis")?>
        <?= noticia("Clases de natación","Ya vuelve a estar disponible nuestra piscina climatizada.","natacion")?>
    </div>
    <?= footer()?>
</body>
</html>
