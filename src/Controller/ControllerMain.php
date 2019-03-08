<?php 

class ControllerMain extends BaseController {
	
	protected static $requiere_autentificacion = [];

    function index() {
    	$this->data['title'] = "Polideportivo | Login";
    	$this->data['style'][] = "/css/polideportivo-global.css";
    	$this->data['style'][] = "/css/login.css";
        $loginForm = new ModelLoginForm($_POST);
        if ($loginForm->datosValidos() && count($_POST) > 0) {
           // Pendiente tratamiento de datos que vienten por post.
                $usuario = ModelUsuario::logIn($_POST['user'],$_POST['pass']);

                if ($usuario) {
                    Session::getInstance()->set(Config::get('session.user'), $usuario['id_usuario']);
                    switch ($usuario['id_tipo_usuario']) {
                        case 'AD':
                            echo "ADMIN";
                            break;
                        case 'CL':
                            echo "CLIENTE";
                            break;
                    }
                    die();
                }else{
                    echo "Fallo autentificacion.";
                    Router::redirect(Config::get('ruta.defecto'));
                }
        }else{
            
            echo "NO sdfdsfs";
        }
        $this->data['form'] = $loginForm->pintar();
    }

    function registro(){
		$this->data['title'] = "Polideportivo | Regsitro";
    	$this->data['style'][] = "/css/errList.css";
    	$this->data['style'][] = "/public/css/registro.css";
    	$this->data['style'][] = "/css/polideportivo-global.css";
    }

}
?>