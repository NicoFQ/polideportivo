<?php 
require('./tratamiento_datos_registro.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/errList.css">
</head>
<body>
    <div class="container">
        <h1>Registro</h1>
        <div class="errList fluid">
			<!-- LISTA DE ERRORES -->
			<?php if (count($errList) > 0) { ?> 
				<h3>Debe completar los campos</h3>
				<ul>
					<?php foreach ($errList as $key => $value) { ?>
						<li><?= $value?></li>
					<?php }//forE ?>
				</ul>
			<?php }//if ?>
        </div>
			<!-- FIN LISTA ERRORES -->
        <div class="form-group col-md-6">
            <form action="#" method="post">
            <label for="dni">Dni:</label>
            <input type="text" name="dni" value="<?= $dni?>" class="form-control" >
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?= $nombre?>" class="form-control">
            <label for="apellido_1">Primer apellido:</label>
            <input type="text" name="apellido_1" value="<?= $apellido_1?>" class="form-control">
            <label for="apellido_2">Segundo Apellido:</label>
            <input type="text" name="apellido_2" value="<?= $apellido_2?>" class="form-control">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" value="<?= $direccion?>" class="form-control">
            <label for="sexo">Sexo: </label> &nbsp;
            <label for="hombre">Hombre</label>
            <input type="radio" name="sexo" value="hombre" class="radio-inline" <?php if($sexo == "hombre") echo "checked"?>>
            <label for="hombre">Mujer</label>
            <input type="radio" name="sexo" value="mujer" class="radio-inline" <?php if($sexo == "mujer") echo "checked"?>><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $email?>" class="form-control">
            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" name="nacionalidad" value="<?= $nacionalidad?>" class="form-control">
            <label for="nombre_usuario">Nombre usuario:</label>
            <input type="text" name="nombre_usuario" value="<?= $nombre_usuario?>" class="form-control">
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" class="form-control">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" value="<?= $fecha_nacimiento?>" class="form-control">

            <input type="submit" value="Enviar" class="btn btn-primary btn-block mt-2">
        </form>
        </div>
    </div>
</body>
</html>