<?php 
	require("../comunes_polideportivo/footer.php");
	require("../comunes_polideportivo/header.php");
	// Base de datos para mi sdeportes favoritos
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<title>
 		Configiracion | Polideportivo	
 	</title>
 		 <link rel="stylesheet" type="text/css" href="../../public/css/configuracion_perfil.css">
	 <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
 </head>
 <body>

 	<?php header_usuarios(); ?>
 	<div class="container">
 		<main>
	 		<h3>
	 			Cofiguracion
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
              <h4>Configuracion de mi cuenta</h4>
              <p><span>Email: </span>usuario@hotmail.es
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span> Editar
                </button>
              </p>
              <p><span>Nombre: </span>NombreUsuario</p>
              <p><span>Apellidos: </span>ApellidoUno ApellidoDos</p>
              <p><span>Direccion: </span>Calle Laguna 30 5D 28005
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span> Editar
                </button>
              </p>


              <p><span>Email: </span>usuario@hotmail.es
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span> Editar
                </button>
              <h4>Seguridad</h4>
              </p>              
              <p><span>Contraseña: </span><a href="">Cambiar contraseña</a>
                
              </p>

 						</div>
 					</div>
 				</article>
 			</section>
 		</main>
 	</div>
 	<?php footer(); ?>
 </body>
 </html>