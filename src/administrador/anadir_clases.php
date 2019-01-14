<?php
// REQUIRES
require('../Conexion.php');
require('./funciones.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

$db = Conexion::getInstance();
$sentencia = $db->conexion();

function selectPista(PDO $obj)
{
    $queryPistas = "Select id_pista from pista order by id_pista asc";
    $sentencia = $obj->prepare($queryPistas);
    $sentencia->execute();
    $resultado = $sentencia->fetchall(PDO::FETCH_ASSOC);
    pintarSelect("pista",$resultado);

}//selectPista



function selectProfesores(PDO $obj)
{
    $queryPistas = "Select nombre
                    from usuario
                    where id_tipo_usuario = 'PR'
                    order by id_usuario asc";
    $sentencia = $obj->prepare($queryPistas);
    $sentencia->execute();
    $resultado = $sentencia->fetchall(PDO::FETCH_ASSOC);
    pintarSelect("profesor",$resultado);
}//selectProfesores

function pintarSelect($name, $arr)
{ ?>
    <label for="<?= $name?>"><?= $name?></label>
    <select name="<?=$name?>" class="form-control">
    <?php foreach ($arr as $key => $value) {
        foreach ($value as $clave => $valor) { ?>
            <option value="<?= $valor?>"><?= $valor?></option>
        <?php }//forE
    }//forE ?>
    </select>
<?php }//pintarSelect

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir clases</title>

    <link rel="stylesheet" href="../../public/css/anadirClases.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">

</head>
<body>
    <?= header_usuarios('admin');?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <!-- Pendiente de implementacion, es necesario crear el horario -->
            <!-- <form action="tratamiento_datos_clases.php" method="post"> -->
                <form action="#" method="post">
                    <h2 class="text-center">Añadir una clase</h2>
                    <div class="form-group">
                        <label for="id_clase">id clase</label>
                        <input type="text" name="id_clase" class="form-control" maxlenght=20 placeholder="CLASE-FUTBOL" required>

                        <label for="fecha">fecha</label>
                        <input type="date" name="fecha" class="form-control" required>

                        <label for="hora_inicio">hora inicio</label>
                        <input type="time" name="hora_inicio" class="form-control" required>

                        <label for="hora_fin">hora fin</label>
                        <input type="time" name="hora_fin" class="form-control" required>

                        <?= selectPista($sentencia);?>

                        <label for="nombre_clase">nombre clase</label>
                        <input type="text" name="nombre_clase" class="form-control" maxlenght=20 required>

                        <label for="precio_clase">precio clase</label>
                        <input type="text" name="precio_clase" class="form-control" required>

                        <?= selectProfesores($sentencia);?>

                        <input type="submit" value="Añadir" name="anadir" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?= footer();?>
</body>
</html>
