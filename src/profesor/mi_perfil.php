<?php 
	require ("../comunes_polideportivo/footer.php");
	require ("../comunes_polideportivo/header.php");
	// Base de datos para mi sdeportes favoritos
	// Falta direccion del domicilio y codifo postal
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Configiracion | Polideportivo	
 	</title>
 	<link rel="stylesheet" href="../../public/css/polideportivo-global.css">
 	<link rel="stylesheet" type="text/css" href="../../public/css/configuracion_perfil.css">
 </head>
 <body>

 	<?php header_usuarios('profesor'); ?>
 	<div class="container">
 		<main>
	 		<h3>
	 			Mi perfil
	 		</h3>
	 		<hr>
 			<section>
 				<article class="row">
 					<div class="col-md-2">
 						<figcaption>
 							<caption>
 								<a href="">Cambiar foto</a>
 							</caption>
 							<figure>
 								<img src="../../public/img/profesor_img.jpg">
 							</figure>
 							<caption>
 								<h4>Alvaro Perez</h4>
 							</caption>
 						</figcaption>
 						<div>
 							<ul>
 								<li><a href="mi_perfil.php">Mi perfil</a></li>
 								<li><a href="configuracion.php">Configuracion</a></li>
 							
 							</ul>
 						</div>
 					</div>
 					<div class="col-lg-10">
 						<div class="row">
  							<h4> Mis deportes favoritos</h4> 
                 
  							Baloncesto, Tenis, Futbol. <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span> Editar
                </button>

  							<br>
  							<br>
  							<h4> Clases que doy </h4>
  							Clase de Tenis, Clase de Baloncesto.
  							<br>
  							<br>
  							<h4> Sobre mi</h4>
  							Me gusta mucho el deporte... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span> Editar
                </button>
 						</div>
 					</div>
 				</article>
 			</section>
 		</main>
 	</div>
 	<?php footer(); ?>

 </body>
 </html>