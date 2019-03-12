<?php 
class ModelLoginForm extends BaseForm
{
	protected static $clase_modelo_asociado = 'ModelLogin';
    protected static $lista_info = ['user',	'pass'];
    protected static $lista_tipo = ['FieldTextLogin','FieldPassLogin'];
    protected static $mensaje_error = ["ERROR_AUTH"	=>"",
									   "ERROR_FIELD"=>"Ninguno de los campos puede estar vacio.",
									  ];
    protected static $ruta = '/usuario/login';
   	static function logInForm(){
   	 	if (count($_POST) > 0) {
           	// Pendiente tratamiento de datos que vienten por post.
            $usuario = ModelUsuario::logIn($_POST['user'],$_POST['pass']);
            if ($usuario) {
                $basicDataUser = ModelUsuario::getBasicDataJSON($usuario['id_usuario']);
                $basicPrefUser = ModelUsuario::getBasicPrefsJSON($usuario['id_usuario']);
                $clasesUser = ModelUsuario::clasesDeUsuario($usuario['id_usuario']);
                Session::getInstance()->set(Config::get('session.user'), $basicDataUser);
                Session::getInstance()->set(Config::get('session.pref'), $basicPrefUser);
                Session::getInstance()->set(Config::get('session.clas'), $clasesUser);
                switch ($usuario['id_tipo_usuario']) {
                    case 'AD':
                        echo "ADMIN";
                        break;
                    case 'CL':
                        echo "CLIENTE";
                        Router::redirect('/usuario/inicio');
                        break;
                }
            }else{
                static::$mensaje_error['ERROR_AUTH'] = "El usuario o la contrasena no son validos.";
            }
        }
   }
}
?>
