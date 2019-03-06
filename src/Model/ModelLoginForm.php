<?php 
	
/**
 * 
 */
class ModelLoginForm extends BaseForm
{
	protected static $clase_modelo_asociado = 'ModelUsuario';

    protected static $lista_info = ['email',	'contrasena'];
    protected static $lista_tipo = ['FieldText','FieldText'];
    protected static $ruta = '/usuario/login';
}

?>
