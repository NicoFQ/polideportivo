<?php 
class ControllerUsuario extends BaseController
{
	protected static $requiere_autentificacion = ['inicio', 'noticias', 'localizacion', 'configuracion_perfil', 'configuracion_cuenta', 'cambio_contrasena', 'eliminar_cuenta', 'eliminar', 'clasesDisponibles'];
	public function inicio(){
		//echo Session::getInstance()->get(Config::get('session.user'));
		$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
		$this->data['user_prefs'] = json_decode(Session::getInstance()->get(Config::get('session.pref')));
		$this->data['clases'] = Session::getInstance()->get(Config::get('session.clas'));
		$this->data['img_perfil'] = $this->compruebaImagenPerfil($this->data['user']->imagen_perfil);
		$this->data["nav_cliente"] = true;
	}

	private function compruebaImagenPerfil($img){
		$auxImg = $img;
		if ($auxImg == null) {
			if ($this->data['user']->sexo) {
				$auxImg = 'default_female2.png';
			}else{
				$auxImg = 'default_male2.png';
			}
		}
		return $auxImg;
	}

	public function noticias(){
		$this->data['noticias'] = ModelNoticia::getAll();
		$this->data["nav_cliente"] = true;
	}

	public function localizacion(){$this->data["nav_cliente"] = true;}
	public function reservas(){$this->data["nav_cliente"] = true;}

	public function configuracion_perfil(){
		$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
		$this->data['user_prefs'] = json_decode(Session::getInstance()->get(Config::get('session.pref')));
		$this->data['clases'] = Session::getInstance()->get(Config::get('session.clas'));
		$this->data['img_perfil'] = $this->compruebaImagenPerfil($this->data['user']->imagen_perfil);
		$this->data["nav_cliente"] = true;
	}

	public function configuracion_cuenta(){
		$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
		$this->data['img_perfil'] = $this->compruebaImagenPerfil($this->data['user']->imagen_perfil);
		if (isset($_GET['error'])) {
			$this->data["error"] = $_GET['error'];		
		}
		if (isset($_GET['contrasenaCambiada'])) {
		}
		$this->data["nav_cliente"] = true;
	}

	public function cambio_contrasena(){
		$this->checkContrasena();
	}

	public function eliminar_cuenta(){
		$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
		$this->data['img_perfil'] = $this->compruebaImagenPerfil($this->data['user']->imagen_perfil);
		if (isset($_GET['error'])) {
			$this->data["error"] = $_GET['error'];		
		}

	}

	public function eliminar(){
		if (count($_POST)>1) {
				$pass = $_POST['pass_actual'];
				if (!empty($pass)) {
					if (!ModelUsuario::eliminarCuenta($_POST)) {
						Router::redirect('/usuario/eliminar_cuenta?error=La contraseña actual no es correcta.');
					}
				}else{
					Router::redirect('/usuario/eliminar_cuenta?error=La contraseña no puede estar vacia.');
				} 
			}else{
				Router::redirect(Config::get('ruta.defecto'));
			}
	}


	public function clasesDisponibles()
	{
		$this->data["datos_clases"] = ModelUsuario::getDatosClases();
		$this->data["nav_cliente"] = true;
	}//clasesDisponibles


	private function checkContrasena(){
		if (count($_POST)>1) {
				$pass = $_POST['pass_actual'];
				$pass_1 = $_POST['pass_nueva_1'];
				$pass_2 = $_POST['pass_nueva_2'];
				if (!empty($pass) && !empty($pass_1) && !empty($pass_2)) {
					
					if(strcmp($pass_1, $pass_2) == 0){
						if (ModelUsuario::cambioContrasena($_POST)) {
							Router::redirect('/usuario/configuracion_cuenta?contrasenaCambiada=Se ha cambiado la contrasena correctamente.');
						}else{

						Router::redirect('/usuario/configuracion_cuenta?error=La contraseña actual no es correcta.');
						}
					}else{
						Router::redirect('/usuario/configuracion_cuenta?error=Las contraseñas no coinciden.');
					}
				}else{
					Router::redirect('/usuario/configuracion_cuenta?error=Los campos no pueden estar vacios.');

				} 
			}else{
				Router::redirect(Config::get('ruta.defecto'));
			}
	}

        
		public function reservarPista()
		{
          //  $view = new View();
			$this->data['deportes'] = ModelUsuario::todosDeporte();
						
            $_SESSION['listaDeportes'] = $this->data['deportes']; // Guardo en sesion para cuando vaya a pintar en 'confirmar' saber cual es el id 
			$this->data["nav_cliente"] = true;
        }
        
		public function salir()
		{
	        Session::getInstance()->set(Config::get('session.user'), false);
			Session::getInstance()->set(Config::get('session.pref'), false);
			Session::getInstance()->set(Config::get('session.clas'), false);
			unset($_SESSION);
	        App::getRouter()->redirect(Config::get('ruta.defecto'));
        }
		public function confirmar()
		{
			$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
			if (count($_POST) > 0) {
				// Router::redirect('/usuario/eliminar_cuenta?error=La contraseña actual no es correcta.');
			}
			$this->data["nav_cliente"] = true;
        }

				
		public function confirmarPago()
		{	
			$this->data["nav_cliente"] = true;
		}

		public function confirmarClases()
		{
			$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
			
			$this->data["nav_cliente"] = true;
		}
}//ControllerUsuario
?>