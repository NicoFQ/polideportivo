<?php 
/**Funcion Footer que contendra todos los elementos del footer 
 * Para pintar el footer, solo es necesario llamar a la funcion Footer
*/
function footer()
{ ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<div class="container footer">
    <div class="row">
    <footer>
        <!-- Seccion explicativa -->
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-3"><p><span class="span"><i class="fas fa-map-marker-alt"></i></span> C/Toledo 54 28012 - Madrid</p></div>
                <div class="col-md-3"><p><span><i class="far fa-envelope"></i></span> polideportivo@gmail.com</p></div>
                <div class="col-md-3"><p><span><i class="fas fa-phone"></i></span> 9123583077</p></div>
                <div class="col-md-3"><p><span><i class="fas fa-mobile-alt"></i></span> 653445235</p></div>
            </div>
        </div>
        <!-- Iconos -->
        <div class="col-md-2 iconos">
            <div class="row">
                <div class="col-md-3"><a href=""><i class="fab fa-instagram"></i></a></div>
                <div class="col-md-3"><a href=""><i class="fab fa-linkedin"></i></a></div>
                <div class="col-md-3"><a href=""><i class="fab fa-facebook-square"></i></a></div>
                <div class="col-md-3"><a href=""><i class="fab fa-twitter-square"></i></a></div>
            </div>
        </div>
    </footer>
    </div>
</div>

 <?php }//footer ?>
