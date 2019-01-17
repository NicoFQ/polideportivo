<?php 
// REQUIRES
require('./funciones.php');
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

$db = Conexion::getInstance();
$sentencia = $db->conexion();

// Thead comun a todos los empleados
$theadEmpleados = ["id","nombre","primer apellido","segundo apellido", "email", "nombre usuario", "sexo","id usuario", "eliminar"];

// Obtencion de todos los datos de los empleados
$queryEmpleados = 'select id_usuario "id", nombre, 
                    apellido_1 "Primer apellido",apellido_2 "segundo apellido", 
                    email, nombre_usuario "nombre usuario",
                    sexo, id_tipo_usuario "id usuario"
                    from usuario
                    where id_tipo_usuario IN ("AD","PR") order by id_usuario asc;';

$sentencia = $sentencia->prepare($queryEmpleados);
$resultadoEmpleados = $sentencia->execute();
$resultadoEmpleados = $sentencia->fetchall(PDO::FETCH_ASSOC);


// FUNCIONES
function buscador()
    {
        $db = Conexion::getInstance();
        $db = $db->conexion();

        $nombre = "";
        $apellido = "";
        $dni = "";

        if (count($_GET) > 0 ) {
            $nombre = ucwords(trim(strtolower($_GET["nombre"])));
            $apellido = ucwords(trim(strtolower($_GET["apellido"])));
            $dni = strtoupper(trim($_GET["dni"]));
        }//if

        $queryBuscador = 'select id_usuario "id", nombre, 
                        apellido_1 "Primer apellido",apellido_2 "segundo apellido", 
                        email, nombre_usuario "nombre usuario",
                        sexo, id_tipo_usuario "id usuario"
                        from usuario
                        where id_tipo_usuario IN ("AD","PR") AND
                        (nombre = :name OR apellido_1 = :surname OR dni = :dni);';

        $sentenciaBuscador = $db->prepare($queryBuscador);
        $sentenciaBuscador->execute(array(':name' => $nombre,':surname' => $apellido, ':dni' => $dni));
        $resultadoBuscador = $sentenciaBuscador->fetchall(PDO::FETCH_ASSOC);

        return $resultadoBuscador;
    }//buscador

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de empleados</title>

    <link rel="stylesheet" href="../../public/css/listadoEmpleados.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    <?= header_usuarios('admin')?>
    <div class="container">
        <?php 
            plantillaBuscadorHTML();
            if (buscador()) {
                pintarEncontrados(buscador(),$theadEmpleados);
            }else {
                pintarTablaDatosCompletos("Empleados",$resultadoEmpleados,$theadEmpleados);
            }//else
        ?>
    </div>
    <?= footer();?>
    <?php 
        include("../comunes_polideportivo/codigo_javascript.html");
    ?>
</body>
</html>