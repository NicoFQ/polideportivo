<?php 
	
/**
 * 
 */
class ModelLoginForm extends BaseForm
{
	protected static $clase_modelo_asociado = null;

    protected static $lista_info = ['user',	'pass'];
    protected static $lista_tipo = ['FieldTextLogin','FieldTextLogin'];
    protected static $ruta = '/usuario/login';

    
}

?>
