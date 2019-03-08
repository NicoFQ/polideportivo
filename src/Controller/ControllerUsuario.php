<?php 
/**
 * 
 */
class ControllerUsuario extends BaseController
{
	public function logIn(){
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
	}
}
?>