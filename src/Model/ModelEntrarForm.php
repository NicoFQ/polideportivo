<?php 

/**
 * 
 */
class ModelEntrarForm extends BaseForm
{
	protected static $lista_info=['usuario', 'contrasena'];
	protected static $lista_tipo=['FieldText', 'FieldContrasena'];
	protected static $clase_modelo_asociado = 'ModelUsuario';
}

 ?>