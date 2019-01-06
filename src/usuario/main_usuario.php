<?php 
// REQUIRES
require('../Conexion.php');
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home Administrador</title>

    <link rel="stylesheet" href="../../public/css/mainUsuario.css">
    <link rel="stylesheet" href="../../public/css/calendario_main_usuario.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">

</head>
<body>
    <?= header_usuarios();?>
        <div class="container">
            <!--
            <div class="contenedor-imagen" id="imgGallary">
                <h3>Contenido</h3>
                <img src="../../public/img/tennis_bg.jpg" alt="Tennis">
                <img src="../../public/img/swpool_bg.jpg" alt="sw">
                <img src="../../public/img/soccer_bg.jpg" alt="fut">
            </div>
            -->
            <div class="row jumbotron">
              
                <div class="col-md-3">
                    <figcaption class="text-center">
                                <figure>
                                    <img src="./../../public/img/default_male.png">
                                </figure>
                            </figcaption>
                </div>

                <div class="col-md-9">
                    <h3>Andres Lopez Guzman (Andrew)</h3>
                    <span>22 años</span>
                                                <h4> Clases en las que estoy </h4>
                            Tenis, Baloncesto.
                            <br>
                    <h4> Mis deportes favoritos</h4>
                            Baloncesto, Tenis, Futbol. <a href=""><img src=""></a>
                            <br>
                    <h4> Sobre mi</h4>
                    Me gusta mucho el deporte... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                </div>
            </div>
            <div class="row">
                <h3>Horarios de esta semana</h3>
                <div class="calendar">
  
  <header>
      <button class="secondary" style="align-self: flex-start; flex: 0 0 1">Today</button>
      <div class="calendar__title" style="display: flex; justify-content: center; align-items: center">
        <div class="icon secondary chevron_left">‹</div>
        <h1 class="" style="flex: 1;"><span></span><strong>18 JAN – 24 JAN</strong> 2016</h1>
        <div class="icon secondary chevron_left">›</div>
      </div> 
      <div style="align-self: flex-start; flex: 0 0 1"></div>
  </header>
  
  <div class="outer">

  
  <table>
  <thead>
    <tr>
      <th class="headcol"></th>
      <th>Mon, 18</th>
      <th>Tue, 19</th>
      <th class="today">Wed, 20</th>
      <th>Thu, 21</th>
      <th>Fri, 22</th>
      <th class="secondary">Sat, 23</th>
      <th class="secondary">Sun, 24</th>
    </tr>
  </thead>
  </table>

<div class="wrap"> 
  <table class="offset">

  <tbody>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td class="past"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">6:00</td>
      <td></td>
      <td></td>
      <td class="past"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td class="past"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">7:00</td>
      <td></td>
      <td></td>
      <td class="past"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td class="now"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">8:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div class="event double"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>8:30–9:30 Yoga</div></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">9:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">10:00</td>
      <td></td>
      <td></td>
      <td><div class="event double"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>10:00–11:00 Meeting</div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">11:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">12:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">13:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">14:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">15:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">16:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">17:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol">18:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>

            </div>
        </div>
    <?=footer()?>

    <!--<script src="../../public/js/slider.js"></script>-->
</body>
</html>