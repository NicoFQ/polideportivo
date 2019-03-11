<?php 
class ControllerUsuario extends BaseController
{
	public function inicio(){
		//echo Session::getInstance()->get(Config::get('session.user'));
		$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
		$this->data['user_prefs'] = ModelUsuario::getGustos($this->data['user']->id_usuario);
		$this->data["nav_cliente"] = true;
	}
	public function noticias(){
		$this->data['noticias'] = ModelNoticia::getAll();
		$this->data["nav_cliente"] = true;
	}

	public function localizacion(){$this->data["nav_cliente"] = true;}
	public function reservas(){$this->data["nav_cliente"] = true;}

	public function clasesDisponibles()
	{
		$this->data["datos_clases"] = ModelUsuario::getDatosClases();
		$this->data["nav_cliente"] = true;
	}//clasesDisponibles
	
}//ControllerUsuario
?>