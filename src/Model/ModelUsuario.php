<?php 

/**
 * 
 */
class ModelUsuario extends BaseModel
{
	protected static $lita_info = [	"email",
									"nombre",
									"apellido_1",
									"apellido_2",
									"direccion",
									"imagen_perfil",
									"nombre_usuario",
									"fecha_nacimiento",
									"sexo",
									"nacionalidad",
									"id_tipo_usuario",
									"fecha_alta",
									];

    protected static $campo_id = "id_usuario";
    protected static $tabla = "usuario";

	public static function logIn(string $user, string $pass){
		echo $user;
		echo $pass;
		print_r(ModelUsuario::existeUsuario($user));
		echo "No se sabe";
		die();
	}


	public static function logOut(string $token){

	}


	public static function existeUsuario(string $user){
		$db = App::getDB();
		$usuario = false;
		$SQL = "select * from usuario where nombre_usuario = ? or email = ?;";
		
		if ($sentencia = $db->ejecutar($SQL, $user, $user)) {
			$usuario = $sentencia;			
		}
		return $usuario;
	}

	public function autentificar(string $user, string $pass){
		$encontrado = false;
		if ($usuario = ModelUsuario::existeUsuario($user)) {
			if ($usuario[0]['contrasena'] === $pass) {
				$encontrado = true;
				$usuario = new Usuario($usuario[0]);
				$usuario->homeUsuario();
			}
		}
		return $encontrado;
	}

}

 ?>