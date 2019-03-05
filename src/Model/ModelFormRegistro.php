<?php 

/**
 * 
 */
class ModelFormRegistro extends BaseForm
{
	protected static $lista_info=['nombre', 'nick', 'contrasena'];
	protected static $lista_tipo=['FieldText', 'FieldText', 'FieldText'];
	protected static $clase_modelo_asociado = 'ModelUsuario';
}


 ?>