<?php 
	require('./../src/autentificacion.php');
	$user = "";$pass = "";
	$autentificacion = "";
	
	function clean_input($data) {
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}

	if (isset($_POST["Enviar"])) {
		$user = clean_input($_POST["email"]);
		$pass = clean_input($_POST["key"]);
		if (!autentificar($user, $pass)) {
			$autentificacion = "<span style='color:red;'>Usuario o contraseña incorrecto.</span>";
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login | Polideportivo</title>
	 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


	<script src="./js/login.js"></script> <!--  Pendiente -->
	<link rel="stylesheet" type="text/css" href="./css/login.css"> 

	<link rel="stylesheet" href="./css/polideportivo-global.css">
</head>
<body>
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-md-6 col-md-offset-3">
                <h1>Entra con tu email o nombre de usuario</h1>
                <h1>O puedes <a href="./../src/registro/registro.php">registrarte</a></h1>
                    <form role="form" action="index.php" method="post" id="login-form" autocomplete="off" class="">
                        <div class="form-group fluid">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email o nombre de usuario" value="<?=$user?>">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Constraseña">
                        </div>
                		<?=$autentificacion?>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" name="Enviar" value="Entrar">
                    </form>
                    
                    <!--
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                    -->
                    
                    <hr>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row-->
    </div> <!-- /.container -->
</section>
<!--
<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div> /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Page © - 2014</p>
                <p>Powered by <strong><a href="http://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a></strong></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>