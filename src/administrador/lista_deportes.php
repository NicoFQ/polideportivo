<?php 
// REQUIRES
require('./funciones.php');
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

$theadDeportes = ["id","nombre pista", "id instalacion", "id pista","precio","estado", "id usuario (profesor)","acción"];

    $queryDeportes = "select p.id_deporte,p.n_pista,p.id_instalacion,p.id_pista ,                             p.precio_hora,p.estado, c.id_usuario 
                      from pista p, clase c
                      where c.id_pista = p.id_pista;";

$db = Conexion::getInstance();
$sentencia = $db->conexion();

$sentencia = $sentencia->prepare($queryDeportes);
$sentencia->execute();
$resultadoDeportes = $sentencia->fetchall(PDO::FETCH_ASSOC);

function pintarDatosDeportes($datos)
{ $id_pista = ""; ?>
    <tbody>
    <?php foreach ($datos as $value) { ?>
        <tr>
        <?php foreach ($value as $clave => $valor) { 
                if ($clave == "id_pista") {
                    $id_pista = $valor;
                }
            ?>
                <td><?= $valor?></td>
            <?php }//forE ?>
            <td>
                <a href="modificar_pista.php?id=<?= $id_pista?>" class="btn btn-warning">
                    <i class="fas fa-marker"></i>
                </a>
                <a href="#" class="btn btn-danger">
                <!-- Pendiente de implementacion -->
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
    <?php }//forE ?>
    </tbody>
<?php }//pintarDatosDeportes

function pintarTablaDatosDeportes($captionTabla, array $tabla, $thead)
    { ?>
    <table class="table">
    <caption class="text-center bg-dark">Lista de <?= $captionTabla?></caption>
        <?= pintarTHEAD($thead)?>
        <?php pintarDatosDeportes($tabla)?>        
        
    </table>
<?php }//pintarTabla

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes</title>

    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/listadoEmpleados.css">
    <link rel="stylesheet" href="../../public/css/listaDeportes.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    <?= header_usuarios('admin');?>
    <div class="container">
        <?= pintarTablaDatosDeportes('Deportes',$resultadoDeportes,$theadDeportes);?>
    </div>
    <?= footer();?>
</body>
</html>