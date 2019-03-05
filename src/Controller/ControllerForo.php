<?php 
	class ControllerForo extends BaseController
	{
		protected $idPost = null;
		function index()
		{
			$this->data = ModelForo::getAll();
		}

		public function crear(){

			$formulario = new ModelForoForm($_POST, false);

			if (count($_POST) > 0 && $formulario->datosValidos()) {
				$formulario->guardaInformacion();
			}
            $this->data['form'] = $formulario->pintar();
		}

		public function registro(){
			$formulario = new ModelFormRegistro($_POST);
			if ($formulario->datosValidos() && count($_POST) > 0) {
				$formulario->guardaInformacion();
			}
			$this->data['form'] = $formulario->pintar();
		}


		public function entrar(){
			$formulario = new ModelEntrarForm($_POST);
			
			if ($formulario->datosValidos() && count($_POST) > 0) {
				$aux = ModelUsuario::logIn($_POST['usuario'],$_POST['contrasena']);
				if ($aux) {
					Session::getInstance()->set('AUTH', $aux['id_usuario']);
            		App::getRouter()->redirect('/');
				}
			}
			
			$this->data['form'] = $formulario->pintar();
		}

		public function salir(){
			if (Session::getInstance()->get('AUTH')) {
				Session::getInstance()->delete('AUTH');
				App::getRouter()->redirect('/');
			}
		}

		public function editar($idPost){
			$this->id = $idPost;
			if (count($_POST) == 0) {
				$post = ModelForo::getById($idPost);
				$formulario = new ModelForoForm($post->toArray());
			}else{
				$formulario = new ModelForoForm($_POST);
			}
			if ($formulario->datosValidos() && count($_POST) > 0) {
				$formulario->guardaInformacion();
			}

			$this->data['form'] = $formulario->pintar();
		}
	}
 ?>