<?php 

	/**
	 * 
	 */
	class ModelForo extends BaseModel
	{
		protected static $lista_info = ['titulo', 'contenido', 'valoracion', 'etiquetas'];
		protected static $lista_campos_insert = ['titulo', 'contenido', 'etiquetas'];
		protected static $campo_id = "id_post";
		protected static $tabla = "post";

	}
	
 ?>