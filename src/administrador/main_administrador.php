<?php 
// REQUIRES
require('./funciones.php');
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

/**Funcion que permite contar el numero de tipos de usuarios */
function numeroUsuarios($role)
{
    $db = Conexion::getInstance();
    $sentencia = $db->conexion();

    $query = "select count(*) from usuario where id_tipo_usuario='$role';";
    $sentencia = $sentencia->prepare($query);
    $sentencia->execute();
    $resultado = $sentencia->fetchall();

    return $resultado;
}
$n_clientes = numeroUsuarios('CL');
$n_admins = numeroUsuarios('AD');
$n_profesores = numeroUsuarios('PR');

$total_Usuarios = $n_clientes[0][0] + $n_admins[0][0] + $n_profesores[0][0];

// Tabla de datos
$theadClientes = [
                    "id",
                    "nombre",
                    "primer apellido",
                    "segundo apellido",
                    "email",
                    "sexo",
                    "nacionalidad",
                    "fecha nacimiento",
                 ];

$db = Conexion::getInstance();
$sentencia = $db->conexion();

$queryDatosUsuarios = "select id_usuario, nombre,
                 apellido_1,
                 apellido_2,
                 email,
                 sexo,
                 nacionalidad,
                 fecha_nacimiento
          from usuario
          where id_tipo_usuario = 'CL';
";
$sentencia = $sentencia->prepare($queryDatosUsuarios);
$sentencia->execute();
$datosUsuarios = $sentencia->fetchall(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Administrador</title>

    <link rel="stylesheet" href="../../public/css/listadoEmpleados.css">
    <link rel="stylesheet" href="../../public/css/mainAdmin.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    <?= header_usuarios('admin');?>
        <div class="container">
            <div class="row main-admin">
                <div class="col-md-4">
                    <a href="">
                    <div class="contenido-admin">
                            <h4>Numero usuarios</h4>
                            <span>
                                <i class="fas fa-users"></i>
                            </span>
                            <p><?= $total_Usuarios;?></p>
                            <p><span>Administradores: <?= $n_admins[0][0]?></span></p>
                            <p><span>Profesores: <?= $n_profesores[0][0]?></span></p>
                            <p><span>Clientes: <?= $n_clientes[0][0]?></span></p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="editar_pista.php">
                        <div class="contenido-admin">
                            <h4>Editar pista</h4>
                            <span>
                                <i class="far fa-futbol"></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="modificar_noticias.php">
                        <div class="contenido-admin">
                            <h4>Agregar noticias</h4>
                            <span>
                                <i class="far fa-newspaper"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <?= plantillaBuscadorHTML()?>
            <div class="row">
                <div class="col-md-12">
                    <?= pintarTablaDatosCompletos('Clientes',$datosUsuarios,$theadClientes,1);?>
                </div>
            </div>
        </div>
        
    <?= footer();?>
</body>
</html>