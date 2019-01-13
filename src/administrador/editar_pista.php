<?php 
// REQUIRES
require('./funciones.php');
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

$theadPista = ["id pista","nombre", "precio/hora","id deporte","id instala.","estado","accion"];

$queryPista = "select id_pista, n_pista,
                        precio_hora, id_deporte,
                        id_instalacion, estado
                from pista;";
$db = Conexion::getInstance();
$sentencia = $db->conexion()->prepare($queryPista);
$sentencia->execute();
$resultadoPista = $sentencia->fetchall(PDO::FETCH_ASSOC);

function pintarDatosPista($datos)
{ $id_pista = ""; ?>
    <tbody>
    <?php foreach ($datos as $value) { ?>
        <tr>
        <?php foreach ($value as $clave => $valor) { 
                if ($clave == "id_pista") {
                    $id_pista = $valor;
                }
                if ($clave == "estado") {
                    if ($valor == 0) {
                        $valor = "No Disponible";
                    }else{
                        $valor = "Disponible";
                    }//else
                }//if
                
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

function pintarTablaDatosPista($captionTabla, array $tabla, $thead)
    { ?>
        <table class="table">
        <caption class="text-center">Lista de <?= $captionTabla?></caption>
            <?= pintarTHEAD($thead)?>
            <?= pintarDatosPista($tabla)?>
            
        </table>
<?php }//pintarTabla
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar pista</title>

    <link rel="stylesheet" href="../../public/css/listadoEmpleados.css">
    <link rel="stylesheet" href="../../public/css/editarPista.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
    
    
    
</head>
<body>
    <?= header_usuarios('admin');?>
    <div class="container">
        <?= pintarTablaDatosPista("Pista",$resultadoPista,$theadPista);?>
    </div>
    <?= footer();?>
</body>
</html>