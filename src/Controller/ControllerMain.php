<?php 

class ControllerMain extends BaseController {
	
	protected static $requiere_autentificacion = [];

    function index() {
    	$this->data['title'] = "Polideportivo | Login";
    	$this->data['style'][] = "/css/polideportivo-global.css";
    	$this->data['style'][] = "/css/login.css";
    }

    function registro(){

		$this->data['title'] = "Polideportivo | Regsitro";

    	$this->data['style'][] = "/css/errList.css";
    	$this->data['style'][] = "/public/css/registro.css";
    	$this->data['style'][] = "/css/polideportivo-global.css";
    }

}
?>