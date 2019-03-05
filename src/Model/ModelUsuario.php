<?php 



class ModelUsuario extends BaseModel 
{
    
	protected static $lista_info = ['nombre', 'nombre_usuario'];
	protected static $lista_campos_insert = ['nombre', 'nombre_usuario', 'contrasena'];
	protected static $campo_id = "id_usuario";
	protected static $tabla = "usuario";


   static function logIn($user, $pass){
   		$db = App::getDB();
   		$existeUsuario = false;
   		$sql = "select * from usuario where nombre_usuario = ? and contrasena = ?;";
         $resultado = $db->ejecutar($sql, $user, $pass);
         if (is_array($resultado)) {
            $existeUsuario = $resultado[0];
         }
   		return $existeUsuario;
   }

   

}

   
 ?>