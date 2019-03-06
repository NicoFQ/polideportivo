<?php 
/**
 * 
 */
class ControllerUsuario extends BaseController
{
		

	public function logIn(){
		echo "Ingresando...";

		ModelUsuario::logIn($_POST['user'],$_POST['pass']);
	}

}
	



 ?>