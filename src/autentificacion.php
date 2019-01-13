<?php 
	spl_autoload_register(function ($class) {
    $classPath = "./../src/";
    require("$classPath${class}.php");
	});

	/**
	* Funcion que autentificará usuarios 
	* contra la base de datos. Devolvera verdadero
	* en caso de que el usuario y contrasa sea correcto
	* false en caso contrario.
	*
	* @param $user Indica el email o nomre de usuario.
	* @param $pass Indica la contraseña.
	**/
	
	function autentificar(string $user, string $pass){
		$encontrado = false;
		if ($usuario = Usuario::existeUsuario($user)) {
			if ($usuario[0]['contrasena'] === $pass) {
				$encontrado = true;
				$usuario = new Usuario($usuario[0]);
				$usuario->homeUsuario();
			}
		}
		return $encontrado;
	}
	
 ?>
