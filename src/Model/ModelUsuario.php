<?php
class ModelUsuario extends BaseModel
{
	protected static $lita_info = [	"user", // 
									"pass",
									];

    protected static $campo_id = "id_usuario";
    protected static $tabla = "usuario";


	public static function logIn(string $user, string $pass){
		return static::autentificar($user, $pass);
	}


	public static function logOut(string $token){
		
	}


	public function autentificar(string $user, string $pass){
		$usuario = ModelUsuario::existeUsuario($user);
		if ($usuario) {
			$auxPass = $usuario[0]['contrasena'];
			if ($pass == $auxPass) {
				return $usuario[0];
			}else{
				return false;
			}
		}
	}


	public static function existeUsuario(string $user){
		$db = App::getDB();
		$SQL = "select * from usuario where nombre_usuario = ? or email = ?;";
		$usuario = $db->ejecutar($SQL, $user, $user);
		return $usuario;
	}
}
?>