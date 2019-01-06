<?php 
// Esta pagina solo sera para tratamiento de datos
// e insercion de datos
// REQUIRES
require('../Conexion.php');
// Variables de datos
$id_clase = "";
$fecha = "";
$hora_inicio = "";
$hora_fin = "";
$pista = "";
$nombre_clase = "";
$precio_clase = "";
$profesor = "";

// Obtencion de datos
if (count($_POST) > 0) {
    $id_clase = $_POST["id_clase"];
    $fecha = $_POST["fecha"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_fin = $_POST["hora_fin"];
    $pista = $_POST["pista"];
    $nombre_clase = $_POST["nombre_clase"];
    $precio_clase = $_POST["precio_clase"];
    $profesor = $_POST["profesor"];

    // Insert de datos
    $queryInsert ='insert into clase (
                id_clase,
                fecha,
                hora_inicio,
                hora_fin,
                id_pista,
                nombre_clase,
                precio_clase,
                id_usuario
            ) values (
                :id_clase,
                :fecha,
                :hora_inicio,
                :hora_fin,
                :pista,
                :nombre_clase,
                :precio_clase,
                :profesor
                );';
    $db = Conexion::getInstance();
    $sentencia = $db->conexion();

    $sentencia = $sentencia->prepare($queryInsert);
    $sentencia->execute(
        array(
            ':id_clase' => $id_clase,
            ':fecha' => $fecha,
            ':hora_inicio' => $hora_inicio,
            ':hora_fin' => $hora_fin,
            ':pista' => $pista,
            ':nombre_clase' => $nombre_clase,
            ':precio_clase' => $precio_clase,
            ':profesor' => $profesor,
        )
    );
// Es necesario crear el horario para poder agregar una clase

}//if

?>

