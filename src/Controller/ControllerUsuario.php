<?php 
class ControllerUsuario extends BaseController
{
	public function inicio(){
		//echo Session::getInstance()->get(Config::get('session.user'));
		$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
		$this->data['user_prefs'] = ModelUsuario::getGustos($this->data['user']->id_usuario);
	}














	public function localizacion()
	{
		
	}
}
?>