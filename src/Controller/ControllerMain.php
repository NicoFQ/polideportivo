<?php 

class ControllerMain extends BaseController {
	
	protected static $requiere_autentificacion = [];

    function index() {
    	$this->data['title'] = "Polideportivo | Login";
        $loginForm = new ModelLoginForm($_POST);
        $this->data['form'] = $loginForm->pintar();
        $this->data['footer'] = "yes";
    }

    function registro(){
        $form = new ModelRegistroForm($_POST);
        if(count($_POST)>0 && $form->datosValidos()) {
            App::getRouter()::redirect('/index/');
        }
        $this->data['form'] = $form->pintar();
        $this->data['footer'] = "yes";
    }

}
?>