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
    <title>Modificar clases</title>


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
                    <article>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Clases</th>
                                    <th>Pista</th>
                                    <th>Hora</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-03</td>
                                    <td>9:00 a 9:59</td>
                                    <td>
                                    <i class="fas fa-edit btn btn-warning"></i>
                                        <a href="clase_eliminada.php">
                                            <i class="fas fa-window-close btn btn-danger"></i>
                                        </a>
                                        
                                    </td>
                                </tr>
                                <!-- Se ha quitado esta clase por que se ha cambiado de dia -->
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-03</td>
                                    <td>16:00 a 16:59</td>
                                    <td>
                                        <i class="fas fa-edit btn btn-warning"></i>
                                        <i class="fas fa-window-close btn btn-danger"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-02</td>
                                    <td>17:00 a 18:30</td>
                                    <td>
                                        <i class="fas fa-edit btn btn-warning"></i>
                                        <i class="fas fa-window-close btn btn-danger"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-02</td>
                                    <td>19:00 a 20:30</td>
                                    <td>
                                        <i class="fas fa-edit btn btn-warning"></i>
                                        <i class="fas fa-window-close btn btn-danger"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </article>
                </section>
            </main>
        </div>
    </div>
    <?= footer();?>
</body>
</html>