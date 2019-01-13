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
    <title>Inicio Profesor</title>

    <link rel="stylesheet" href="../../public/css/mainProfesor.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    <?= header_usuarios('profesor');?>
    <div class="container">
        <div class="row text-uppercase">
            <main>
                <aside class="perfil col-md-2">
                    <h2 class="text-center">Perfil</h2>
                    <article>
                        <img src="../../public/img/profesor_img.jpg" alt="Foto de perfil">
                        <div>
                            <h4 class="text-udnerline">Datos</h4>
                            <p><span>Nombre:</span>Alvaro Perez</p>
                            <p><span>Nombre Usuario:</span>A_Perez</p>
                        </div>
                    </article>
                </aside>
                <section class="content-t col-md-9 col-md-offset-1 text-center">
                    <h2>Horario para el dia: <?= $hoy?></h2>
                    <article>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Clases</th>
                                    <th>Pista</th>
                                    <th>Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-03</td>
                                    <td>9:00 a 9:59</td>
                                </tr>
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-02</td>
                                    <td>10:00 a 10:59</td>
                                </tr>
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-03</td>
                                    <td>16:00 a 16:59</td>
                                </tr>
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-02</td>
                                    <td>17:00 a 18:30</td>
                                </tr>
                                <tr>
                                    <td>Clase-Padel</td>
                                    <td>Pista-02</td>
                                    <td>19:00 a 20:30</td>
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