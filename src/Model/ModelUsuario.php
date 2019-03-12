<?php
class ModelUsuario extends BaseModel
{
	protected static $lista_info = [	
		"id_usuario", 		"email", 		"dni",
		"nombre", 			"apellido_1",	"apellido_2", 
		"direccion",		"imagen_perfil","nombre_usuario", 
		"fecha_nacimiento",	"sexo", 		"nacionalidad",
		"id_tipo_usuario", 	"fecha_alta",
						]; // Pendiente comentarios.

    protected static $campo_id = "id_usuario";
    protected static $tabla = "usuario";
   /* static $basicData = [	
    	"id_usuario", 		"email", 		"dni", 
		"nombre", 			"apellido_1",	"apellido_2", 
		"direccion",		"imagen_perfil","nombre_usuario", 
		"fecha_nacimiento",	"sexo", 		"nacionalidad",
		"id_tipo_usuario", 	"fecha_alta",
						]; // Pendiente comentarios.
*/
	public static function logIn(string $user, string $pass){
		return static::autentificar($user, $pass);
	}


	public static function logOut(string $token){
		
	}


	public function autentificar(string $user, string $pass){
		$usuario = ModelUsuario::existeUsuario($user);
		if ($usuario) {
			$auxPass = $usuario[0]['contrasena'];
			if (ModelUsuario::unHashPass($pass,$auxPass)) {
				return $usuario[0];
			}else{
				return false;
			}
		}
	}

	static function getById($id){
		$db = App::getDB();
		$SQL = "select * from usuario where nombre_usuario = ? or email = ?;";
		$usuario = $db->ejecutar($SQL, $user, $user);
		return $usuario;
	}

	static function getBasicDataJSON($id){
		$db = App::getDB();
		$camposBasicData = implode(",", static::$lista_info);
		$SQL = "select $camposBasicData from usuario where ".static::$campo_id." = ?;";
		$usuario = $db->ejecutar($SQL, $id);
		if ($usuario) {
			$usuario = json_encode($usuario[0]);
		}
		return $usuario;	
	}

	static function clasesDeUsuario($id){
		$db = App::getDB();
		$SQL = "select nombre_clase from asiste a, clase c where a.id_usuario = ? and a.id_clase = c.id_clase;";
		$auxClases = $db->ejecutar($SQL, $id);
			$clases = [];
		if (count($auxClases) > 0) {
			foreach ($auxClases as $key => $value) {
                array_push($clases, $value['nombre_clase']);
            }
            $clases = implode(', ', $clases);
		}else{
			$clases = "Aun no estas en ninguna de nuestras clases. ";
		}
		return $clases;
	}

	static function getBasicPrefsJSON($id){
		$db = App::getDB();
		$SQL = "select * from gustos_usuario where id_usuario = ?;";
		
		$gustos = $db->ejecutar($SQL, $id);
		$prefs = [];
		if (!empty($gustos)) {
			$prefs = $gustos[0];
		}else{
			$prefs = ["deportes_favoritos" => "Aun no has definido tus deportes favoritos.",
					"comentarios" => "Aun no has hecho ningún comentario."];
		}
		return json_encode($prefs);
	}

	
	private static function compruebaContrasena($user, $datos){
		$contrasenasCorrectas = false;
		$pass = $datos['pass_actual'];
		$pass_1 = $datos['pass_nueva_1'];
		$pass_2 = $datos['pass_nueva_2'];
		if (static::autentificar($user->nombre_usuario, $pass)) {
			if (strcmp($pass_1, $pass_2) == 0) {
				ModelUsuario::updateContrasena($user->id_usuario, $pass_1);
				$contrasenasCorrectas = true;
			}
		}
		return $contrasenasCorrectas;
	}
	private static function updateContrasena($id, $pass){
		$db = App::getDB();
		$hashPass = ModelUsuario::hashPass($pass);
		$SQL = "update usuario set contrasena = ? where id_usuario = ?;";
		$usuario = $db->ejecutar($SQL, $hashPass, $id);
		return $usuario;
	}




	static function cambioContrasena($datos){
		$contrasenaCambiada = false;
		$userSession = json_decode(Session::getInstance()->get(Config::get('session.user')));
		if ($userSession && count($datos)) {
			$contrasenaCambiada = ModelUsuario::compruebaContrasena($userSession,$datos);
		}
		return $contrasenaCambiada;
	}



	public static function existeUsuario(string $user){
		$db = App::getDB();
		$SQL = "select * from usuario where nombre_usuario = ? or email = ?;";
		$usuario = $db->ejecutar($SQL, $user, $user);
		return $usuario;
	}

	public static function eliminarCuenta($datos){
		$cuentaEliminada = false;
		$userSession = json_decode(Session::getInstance()->get(Config::get('session.user')));
		if ($userSession && count($datos)) {
			$cuentaEliminada = ModelUsuario::dropUser($userSession,$datos);
		} 
		return $cuentaEliminada;
	}

	public static function dropUser($user, $datos){
		$usuarioEliminado = false;
		$auxUser = ModelUsuario::existeUsuario($user->nombre_usuario);
		$pass = $datos['pass_actual'];
		if ($auxUser) {
			
			if (ModelUsuario::unHashPass($pass, $auxUser[0]['contrasena'])) {
				$db = App::getDB();
				$SQL = "delete from usuario where id_usuario = ?;";
				$usuario = $db->ejecutar($SQL, $user->id_usuario);
				$usuarioEliminado = true;
			}
		}
		return $usuarioEliminado;
	}

	public function getLocalizacion(){}

	public static function getDatosClases()
	{
		$db = App::getDB();
		$query = "select c.id_clase, c.nombre_clase, id_instalacion, c.fecha, c.hora_inicio, c.hora_fin, c.precio_clase 
		from clase c, pista p 
		where p.id_pista = c.id_pista;";
		
		$resultado = $db->ejecutar($query);
		return $resultado;
	}


	static function calcularEdad($nacimiento){
		$cumpleanos = new DateTime($nacimiento);
	    $hoy = new DateTime();
	    $anios = $hoy->diff($cumpleanos);
	    return $anios->y;
	}

	private static function hashPass($pass){
		return password_hash($pass, 2);
	}

	/**
	* 
	*/
	private static function unHashPass($txt, $hash){
		return password_verify($txt,$hash);
	}

	public static function registrar($datos, $ad = false)
	{
		$db = App::getDB();
		$datos["contrasena"] = ModelUsuario::hashPass($datos["contrasena"]);
		
		$campos_para_insert = implode(",",ModelRegistroForm::getListaDatos());
	
		$parametros_para_insert = implode(",",array_fill(0,(count(ModelRegistroForm::getListaDatos())), "?"));
		$sql_insert = "";
		if ($ad) {
			$sql_insert = "INSERT INTO usuario ($campos_para_insert, id_tipo_usuario) VALUES ($parametros_para_insert,?);";
			array_push($datos, 'AD');
		}else{
			$sql_insert = "INSERT INTO usuario ($campos_para_insert) VALUES ($parametros_para_insert);";
		}
            // print_r(array_values(array_slice($this->data,1)));
			$resultado = $db->ejecutar($sql_insert, ...array_values($datos));
            if (is_array($resultado)) {
				return true;
            }
		
	}//registrar
        
        public static function todosDeporte(){
            
            $db = App::getDB();
		$query = "select p.id_instalacion,p.id_deporte, d.nombre_deporte from deporte d, pista p
		where p.id_deporte = d.id_deporte;";
		
		$resultado = $db->ejecutar($query);
		return $resultado;
		}
		public static function getInstalacion($id)
		{
			$db = App::getDB();
			$query = "select distinct p.id_pista,p.id_instalacion,p.id_deporte, p.precio_hora,d.nombre_deporte from deporte d, pista p
			where p.id_deporte = d.id_deporte and p.id_deporte= ?;";
			
			$resultado = $db->ejecutar($query,$id);
			return $resultado;
		}

}
?>