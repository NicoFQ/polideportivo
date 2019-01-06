<?php 
// REQUIRES
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

function noticia($encabezado,$subtitulo,$img)
{ $hoy = date('l, d M Y');?>
    <article>
        <h2 class="text-center"><?= $encabezado?></h2>
        <h3><?= $subtitulo?></h3>
        <p><?= $hoy?></p>
        <div class="contenido-noticia">
            <img src="../../public/img/<?= $img?>.jpg" alt="<?= $img?>">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut esse ipsam nostrum, a accusamus nihil nulla impedit odit velit eligendi itaque minus quas, omnis blanditiis corrupti, magnam cupiditate. Cupiditate?Dignissimos obcaecati numquam corporis, maxime eos quos magnam, est fugiat doloribus ad pariatur, laborum voluptate hic tempora porro minima qui quia! Nesciunt dicta quas neque non excepturi! Nesciunt, autem esse.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut esse ipsam nostrum, a accusamus nihil nulla impedit odit velit eligendi itaque minus quas, omnis blanditiis corrupti, magnam cupiditate. Cupiditate?Dignissimos obcaecati numquam corporis, maxime eos quos magnam, est fugiat doloribus ad pariatur, laborum voluptate hic tempora porro minima qui quia! Nesciunt dicta quas neque non excepturi! Nesciunt, autem esse.
            </p>
        </div>
    </article>
    <hr>
<?php }//noticia ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>

    <link rel="stylesheet" href="../../public/css/noticias.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    
    <?= header_usuarios()?>
    <div class="container">
        <h1 class="text-center text-uppercase">Ultimas Noticias</h1>
        <?= noticia("Nueva Pista de Padel","Apertura de la nueva pista de padel.","paddel")?>
        <?= noticia("Torneo de Tenis","Abierta inscripcion para el torneo de Tenis.","torneo_tennis")?>
        <?= noticia("Piscina climatizada","Ya vuelve a estar disponible nuestra piscina climatizada.","piscina")?>
    </div>
    <?= footer()?>
</body>
</html>