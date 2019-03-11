<?php 
class ModelAdmin extends BaseModel 
{
        protected static $lista_info = ['id_usuario',
                                        'email',
                                        'contrasena',
                                        'dni',
                                        'nombre',
                                        'apellido_1',
                                        'apellido_2',
                                        'direccion',
                                        'imagen_perfil',
                                        'nombre_usuario',
                                        'fecha_nacimiento',
                                        'sexo',
                                        'nacionalidad',
                                        'id_tipo_usuario',
                                        'fecha_alta',
                                       ];
        protected static $campo_id = 'id_usuario';
        protected static $tabla = 'usuario';

        public static function getTotalUsuarios ()
        {
            $db = App::getDB();
            $query = "SELECT COUNT(*) FROM ".static::$tabla;
            $resultado = $db->ejecutar($query);

            return $resultado;
        }//getTotalUsuarios
        public static function getTotalTipoUsuarios ($tipo)
        {
            $db = App::getDB();
            $query = "SELECT COUNT(*) FROM ".static::$tabla." WHERE id_tipo_usuario = '$tipo'";
            
            $resultado = $db->ejecutar($query);

            return $resultado;
        }//getTotalTipoUsuarios
        public static function getDatosClientes ($tipo = 'CL')
        {
            $db = App::getDB();
            $query = "SELECT id_usuario,
                             nombre,
                             apellido_1,
                             apellido_2,
                             email,
                             sexo,
                             nacionalidad,
                             fecha_nacimiento
                             FROM ".static::$tabla."
                             WHERE id_tipo_usuario = '$tipo'
                             LIMIT 50";
            
            $resultado = $db->ejecutar($query);

            return $resultado;
        }//getDatosClientes
        /**
         * @param $tipo = Tipo de usuario que se desea buscar (CL,AD,PR)
         */
        public static function buscador($tipo,$params)
        {
            $db = App::getDB();
            
            $query = "SELECT id_usuario,
                             nombre, 
                             apellido_1,
                             apellido_2, 
                             email,
                             nombre_usuario,
                             sexo,
                             id_tipo_usuario 
                             FROM ".static::$tabla."
                             WHERE
                             id_tipo_usuario IN (?)
                             AND nombre = ? 
                             AND apellido_1 = ?
                             AND dni = ?;";
            
            $resultado = $db->ejecutar($query, $tipo, ...array_values($params));

            return $resultado;
        }//buscador

        public static function listarEmpleados ()
        {
            // DEBATIR???
            // solo tendremos 4 empleados, es necesario hacer un crud, y un listado de estos? 
            $db = App::getDB();
            $nombre_clase = get_class();
            $query = "SELECT id_usuario,
                      nombre, 
                      apellido_1 ,
                      apellido_2 , 
                      email, nombre_usuario ,
                      sexo, id_tipo_usuario 
                      from ".static::$tabla."
                      WHERE id_tipo_usuario IN ('AD', 'PR') 
                      ORDER BY id_usuario asc;";
            $resultado = $db->ejecutar($query);

            return $resultado;
            // return new $nombre_clase($resultado);
        }//listarEmpleados
        public static function borrarEmpleado($id)
        {
            $db = App::getDB();
            $query = "DELETE FROM ".static::$tabla."
                      WHERE id_usuario = ?";
            $resultado = $db->ejecutar($query,$id);

            return $resultado;
        }//borrarEmpleado

        // Pendiente de implementar en la version final/////////////////////////////////////////////////////////////
        // public static function editarEmpleado($id)
        // {
        //     // Nos hace falta esta consulta? el admin no podra cambiar ninguno de estos campos del user / empleado 
        //     $db = App::getDB();
        //     $query = "UPDATE ".static::$tabla."
        //               SET id_usuario = ?";
        //     $resultado = $db->ejecutar($query,$id);

        //     return $resultado;
        // }//editarEmpleado
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////

        public static function getPistas()
        {
            $db = App::getDB();
            $query = "SELECT DISTINCT n_pista, id_pista FROM pista";
            $resultado = $db->ejecutar($query);
            return $resultado;
        }//getPistas

        public static function getProfesores()
        {
            $db = App::getDB();
            $query = "SELECT nombre, id_usuario
                      FROM usuario
                      WHERE id_tipo_usuario = 'PR'
                      ORDER BY id_usuario asc";
            $resultado = $db->ejecutar($query);
            return $resultado;
        }//getPistas

        public static function getHorario()
        {
            $db = App::getDB();
            $query = "SELECT *
                      FROM horario";
            $resultado = $db->ejecutar($query);
            return $resultado;
        }

        public static function agregarClase ($values)
        {
            $db = App::getDB();
            $query = "INSERT INTO clase (
                                         id_clase,
                                         fecha,
                                         hora_inicio,
                                         hora_fin,
                                         id_pista,
                                         nombre_clase,
                                         precio_clase,
                                         id_usuario
                                        )
                      VALUES (?,?,?,?,?,?,?,?);";
                      
            $resultado = $db->ejecutar($query,...array_values($values));
            return $resultado;
        }//agregarClase


    
}//ModelNoticia

?>