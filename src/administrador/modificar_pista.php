<?php 
require('../Conexion.php');
require('./funciones.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

$db = Conexion::getInstance();
$sentencia = $db->conexion();

$queryPista = 'select n_pista, precio_hora, estado
                from pista
                where id_pista = :id_pista ;';
$sentencia = $sentencia->prepare($queryPista);
$sentencia->execute(array(':id_pista' => $_GET["id"]));
$resultadoPista = $sentencia->fetchall(PDO::FETCH_ASSOC);

$estado = ($resultadoPista[0]["estado"] == 1) ? true  : false;

// Datos del form
$nuevo_nombre = "";
$nuevo_precio = "";
$nuevo_estado = "";

if (isset($_POST["actualizar"])) {
    if (empty($_POST["nombre_pista"])) {
        $nuevo_nombre = $resultadoPista[0]["n_pista"];
    }elseif (isset($_POST["nombre_pista"])) {
        $nuevo_nombre = $_POST["nombre_pista"];
    }//else

    if (empty($_POST["precio"])) {
        $nuevo_precio = $resultadoPista[0]["precio_hora"];
    }elseif (isset($_POST["precio"])) {
        $nuevo_precio = $_POST["precio"];
    }//else

    if (empty($_POST["estado"])) {
        $nuevo_estado = $resultadoPista[0]["estado"];
    }elseif (isset($_POST["estado"])) {
        $nuevo_estado = $_POST["estado"];
        if ($nuevo_estado == "no_disponible") {
            $nuevo_estado = 0;
        }else {
            $nuevo_estado = 1;
        }//else
    }//elseif

    // Actualizacion de datos 
    $queryActualizarPista = "update pista
                             set n_pista = '$nuevo_nombre',
                             precio_hora = '$nuevo_precio',
                             estado = '$nuevo_estado'
                             where id_pista = :id_pista";
    $dbU = Conexion::getInstance();
    $sentenciaUp = $dbU->conexion();
    $sentenciaUp = $sentenciaUp->prepare($queryActualizarPista);
    $sentenciaUp->execute(array(':id_pista' => $_GET["id"]));
    header('refresh:2,main_administrador.php');
    echo "Se ha actualizado el deporte correctamente";
    die();
}elseif (isset($_POST["cancelar"])) {
    header('location:main_administrador.php');
    die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar datos de la pista</title>

    <link rel="stylesheet" href="../../public/css/modificarPista.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">

</head>
<body>
    <?= header_usuarios('admin');?>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-3">
            <form action="#" method="post">
                <h3>Actualizar datos de la pista: <?= $_GET["id"]?></h3>
                <label for="nombre">Nombre de la pista:</label>
                <input type="text" name="nombre_pista" placeholder="<?= $resultadoPista[0]["n_pista"]?>" class="form-control">
                <label for="precio">Precio / Hora</label>
                <input type="number" step="0.01" name="precio" placeholder="<?= $resultadoPista[0]["precio_hora"]?> €" class="form-control">
                <label for="estado">Estado</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="disp" name="estado" value="disponible" <?php if($estado) echo "checked";?>>
                    <label class="form-check-label" for="disp">Disponible</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="no_disp" name="estado" value="no_disponible"<?php if(!$estado) echo "checked";?>>
                    <label class="form-check-label" for="no_disp">No Disponible</label>
                </div>

                <div id="botones">
                    <a href="#">
                        <input type="submit" value="Actualizar" name="actualizar" class="btn btn-primary">
                    </a>
                    <a href="#" >
                        <input type="submit" value="Cancelar" name="cancelar" class="btn btn-danger">
                    </a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <?= footer();?>
</body>
</html>