<?php 
// REQUIRES
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

setlocale(LC_ALL,"es_ES");
$hoy = date('l, d M Y');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar clases</title>

    <link rel="stylesheet" href="../../public/css/mainProfesor.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    <?= header_usuarios('profesor');?>
    <div class="container">
        <div class="row text-uppercase">
            <main>
                <section class="content-t col-md-12 text-center">
                        <h2>Modificar horario para el dia: <?= $hoy?></h2>
                        <div class="form-group col-md-4 col-md-offset-4">
                            <form action="clase_modificada.php" method="post">
                                <label for="fecha">Fecha:</label>
                                <input type="date" class="form-control" min="2019-01-06"max="2019-01-15">
                                <label for="hora">Horas disponibles</label>
                                <select name="hora" class="form-control">
                                    <option value="9:00">9:00 a 9:59</option>
                                    <option value="9:00">16:00 a 17:59</option>
                                </select>
                                <input type="submit" value="Enviar" class="btn btn-primary btn-block" style="margin-top:10px;">
                            </form>
                        </div>
                </section>
            </main>
        </div>
    </div>
    <?= footer();?>
</body>
</html>