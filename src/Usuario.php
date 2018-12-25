<?php 

	/**
	 * Esta clase representa un usuario.
	 */
	class Usuario
	{
 		private $id_usuario;
 		private $email;
 		private $nombre;
 		private $apellido_1;
 		private $apellido_2;
 		private $direccion;
 		private $imagen_perfil;
 		private $fecha_nacimiento;
 		private $sexo;
 		private $nacionalidad;
 		private $fecha_alta;
 		private $id_tipo_usuario;
 		private $reservas;
 		private $clases;

		function __construct(array $user)
		{
			$this->id_usuario 		= $user['id_usuario'];
			$this->email 			= $user['email'];
			$this->nombre 			= $user['nombre'];
			$this->apellido_1 		= $user['apellido_1'];
			$this->apellido_2 		= $user['apellido_2'];
			$this->direccion 		= $user['direccion'];
			$this->imagen_perfil 	= $user['imagen_perfil'];
			$this->fecha_nacimiento = $user['fecha_nacimiento'];
			$this->sexo 			= $user['sexo'];
			$this->nacionalidad 	= $user['nacionalidad'];
			$this->fecha_alta 		= $user['fecha_alta'];
			$this->id_tipo_usuario = $user['id_tipo_usuario'];
			print_r($user);
		}
		
		public function __get($propiedad){
		    if(property_exists($this, $propiedad)) {
		        return $this->$propiedad;
		    }
		}

		function obtenerReservas()
		{
			$this->reservas = "select reservas;";
		}

		function getReservas(){
			return $this->reservas;
		}
		public function homeUsuario(){
			header("Location: ./../public/home.php?type=$this->id_tipo_usuario");
		}
		public static function existeUsuario(string $user){
			$existeUsuario = false;
			$con = Conexion::getInstance();
			$con = $con->conexion();
			$sentencia = $con->prepare("select * from usuario where nombre_usuario = ? or email = ?;");
			$sentencia->execute(array($user,$user));
			if ($sentencia->rowCount() > 0) {
				$existeUsuario = $sentencia->fetchAll(PDO::FETCH_ASSOC);
			}
			print_r($existeUsuario);
			return $existeUsuario;
		}
	}

 ?>