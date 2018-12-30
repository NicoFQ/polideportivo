<?php 
require('../Conexion.php');
require('./funciones.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

// Redireccion si no tiene el ID
if (!isset($_GET["id"])) {
    header('location: lista_empleados.php');
    die();
}

$db = Conexion::getInstance();
$sentencia = $db->conexion();

$theadEmpleados = ["id","nombre","primer apellido","segundo apellido", "email", "nombre usuario", "sexo","id usuario"];

$query = 'select id_usuario "id", nombre, 
          apellido_1 "Primer apellido",apellido_2 "segundo apellido", 
          email, nombre_usuario "nombre usuario",
          sexo, id_tipo_usuario "id usuario"
          from usuario
          where id_usuario = :id;';
$sentencia = $sentencia->prepare($query);
$sentencia->execute(array(':id' => $_GET["id"]));
$resultado = $sentencia->fetchall(PDO::FETCH_ASSOC);

// Tratamiento de datos del form

if (isset($_POST["confirmar"])) {
    $queryEliminacion = "delete from usuario where id_usuario = :id";

    $db = Conexion::getInstance();
    $sentencia = $db->conexion();

    $sentencia = $sentencia->prepare($queryEliminacion);
    $sentencia->execute(array(':id' => $_GET["id"]));
    header('refresh: 2, lista_empleados.php');
        echo "Se ha eliminado al usuario correctamente";
    die();

}else if (isset($_POST["denegar"])) {
    header('location: lista_empleados.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Usuario</title>

    <link rel="stylesheet" href="../../public/css/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/listadoEmpleados.css">
    <link rel="stylesheet" href="../../public/css/eliminarUsuarios.css">
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/footer.css">

</head>
<body>
    <?= header_usuarios('admin')?>
    <div class="container">
        <?= pintarTablaDatosCompletos($resultado,$theadEmpleados,1)?>
    <form action="#" method="post">
        <input type="submit" value="Eliminar" name="confirmar"class="btn btn-success">
        <input type="submit" value="Cancelar" name="denegar"class="btn btn-danger">
    </form>
    </div>
    
    <?= footer();?>
</body>
</html>