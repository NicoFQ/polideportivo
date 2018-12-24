<?php 
require('../Conexion.php');
$errList = [];
// VARIABLES DE FORM
$dni = "";
$nombre = "";
$apellido_1 = "";
$apellido_2 = "";
$direccion = "";
$nacionalidad = "";
$fecha_nacimiento = "";
$nombre_usuario = "";
$contrasena = "";
$email = "";
$sexo = "";

$valor_sexo = "";

// FUNCIONES
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// TRATAMIENTO ERRORES
if (count($_POST) > 0 ) {
    if (empty($_POST["dni"])) {
        $errList [] = "DNI";
    }
    if (empty($_POST["nombre"])) {
        $errList [] = "Nombre";
    }
    if (empty($_POST["apellido_1"])) {
        $errList [] = "Primer apellido";
    }
    if (empty($_POST["email"])) {
        $errList [] = "Email";
    }
    if (empty($_POST["direccion"])) {
        $errList [] = "Direccion";
    }
    // Datos del sexo
    if (empty($_POST["sexo"])) {
        $errList [] = "Sexo";
    }elseif ($_POST["sexo"] == "hombre") {
        $valor_sexo = 0;
        $sexo = $_POST["sexo"];
    }elseif ($_POST["sexo"] == "mujer") {
        $valor_sexo = 1;
        $sexo = $_POST["sexo"];
    }

    if (empty($_POST["nacionalidad"])) {
        $errList [] = "Nacionalidad";
    }
    if (empty($_POST["nombre_usuario"])) {
        $errList [] = "Nombre de Usuario";
    }
    if (empty($_POST["contrasena"])) {
        $errList [] = "Contraseña";
    }
    if (empty($_POST["fecha_nacimiento"])) {
        $errList [] = "Fecha de Nacimiento";
    }

    // Asignacion de valores obtenidos
    $dni = strtoupper(clean_input($_POST["dni"]));
    $nombre = strtoupper(clean_input($_POST["nombre"]));
    $apellido_1 = strtoupper(clean_input($_POST["apellido_1"]));
    $apellido_2 = strtoupper(clean_input($_POST["apellido_2"]));
    $email = clean_input($_POST["email"]);
    $direccion = strtoupper(clean_input($_POST["direccion"]));
    $nacionalidad = strtoupper(clean_input($_POST["nacionalidad"]));
    $fecha_nacimiento = strtoupper(clean_input($_POST["fecha_nacimiento"]));
    $nombre_usuario = clean_input($_POST["nombre_usuario"]);
    $contrasena = clean_input($_POST["contrasena"]);
    // Serializacion de la contraseña
    $contrasena = password_hash($contrasena,2);

}

// Conexion e inserción de datos
// try {
//     $db = new PDO("mysql:host=localhost;dbname=proyecto_polideportivo", "admin_polideportivo","1234");
//     // Todos los clientes tendran el Role de cliente (CL), el admin es  
//     // quien debe cambiar el Role a profesores y demas
//     $query = "
//     insert into usuario (
//         email,
//         contrasena,
//         dni,
//         nombre,
//         apellido_1,
//         apellido_2,
//         direccion,
//         imagen_perfil,
//         nombre_usuario,
//         fecha_nacimiento,
//         sexo,
//         nacionalidad,
//         id_tipo_usuario
//         ) values (
//         :email,
//         :contrasena,
//         :dni,
//         :nombre,
//         :apellido_1,
//         :apellido_2,
//         :direccion,
//         'empty.jpg',
//         :nombre_usuario,
//         :fecha_nacimiento,
//         :valor_sexo,
//         :nacionalidad,
//         'CL');
//     ";
//     $sentencia = $db->prepare($query);
//     //  TO DO: Hacer bindparams
//     $resultado = $sentencia->execute();
    

//     $resultado = $sentencia->fetchall();

//     echo "<pre>";
//     print_r($resultado);
//     echo "</pre>";

//     $db = null;
// } catch (PDOException $e) {
//     print "¡Error!: " . $e->getMessage() . "<br/>";
//     die();
// }//catch
$db = Conexion::getInstance();


?>