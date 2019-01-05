<?php 
// Pagina estatica: Pendiente de implementacion de servicio de correos
// REQUIRES
require('./funciones.php');
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

$db = Conexion::getInstance();
$sentencia = $db->conexion();

$queryEmails = "select email from usuario where id_tipo_usuario = 'CL'";

$sentencia = $sentencia->prepare($queryEmails);
$sentencia->execute();
$resultadoEmails = $sentencia->fetchall(PDO::FETCH_ASSOC);

function formatoEmails($datos)
{
    $emails = "";
    foreach ($datos as $key => $value) {
        foreach ($value as $clave => $valor) {
            $emails.=$valor."&nbsp;";
        }
    }
    return $emails;
}//formatoEmails


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar Correso</title>

    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
    <style>
        .container form .btn{position:relative; margin-top:10px;}
        .container form{border:solid 2px lightgray; border-radius:10px; padding:20px;}
    </style>
</head>
<body>
    <?= header_usuarios('admin');?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <form action="#" method="post">
                        <h2 class="text-center text-uppercase">Enviar Ofertas</h2>
                        <label for="emisor">Emisor: </label>    
                        <input type="text" name="emisor" value="polideportivo@gmail.com" disabled class="form-control">
                        <label for="asunto">Asunto:</label>
                        <input type="text" name="asunto" placeholder="Oferta" class="form-control">
                        <label for="destino">Para:</label>
                        <input type="text" name="destino" value="<?= formatoEmails($resultadoEmails);?>" class="form-control">

                        <label for="folleto">Folleto:</label>
                        <input type="file" name="folleto" class="form-control-file">
                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary btn-block">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= footer();?>
</body>
</html>