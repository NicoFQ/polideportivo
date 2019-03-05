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
		protected static $fk = "id_usuario";

		static function getByUser($idUser){
			$db = App::getDB();//Solo devuelve la DB
	        $nombre_tabla = static::$tabla; 
	        $campos_para_select = implode(",",static::$lista_info);
	        $campos_para_select = static::$campo_id.",". $campos_para_select;
	        $resultado = $db->ejecutar("SELECT $campos_para_select FROM $nombre_tabla where id_usuario = ?;", $idUser);
	        $resultado = array_map(function($datos) {
	            $nombre_clase = get_called_class();//Obtendra el nombre de mis hijos
	            return new $nombre_clase($datos);
	        },$resultado);
	        return $resultado;
		}
		
		public function editaPost(){
			$nombre_tabla = static::$tabla; 
			$campos_up_completos = "";
            $campos_up = static::$lista_campos_insert;
            foreach ($campos_up as $value) {
                $campos_up_completos  .= "$value=?,";
            }//forE
            $campos_up_completos = substr($campos_up_completos,0, strlen($campos_up_completos) - 1);
            $sql_update = "UPDATE $nombre_tabla set $campos_up_completos where ".static::$campo_id. " = " . $this->id;

            $resultado = $this->db->ejecutar($sql_update,...array_values($this->data));
            if (is_array($resultado)) {
                $this->setId($this->db->getLastId());
                $resultado []= $this->getId();
            }
            return $resultado;
		}

	}
	
 ?>