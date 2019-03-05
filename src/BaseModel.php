<?php 

class BaseModel  
{
    protected $db;
    // Lista de atributos que tengo, que se heredaran a mis hijos
    protected static $lista_info = [];
    protected static $lista_campos_insert = [];
    protected static $campo_id = "";
    protected static $tabla = "";
    protected $id = null;
    private $data;

    public static function getAll($page = 0, $num = 10)
    {
        $db = App::getDB();//Solo devuelve la DB

        $nombre_tabla = static::$tabla; 
        $campos_para_select = implode(",",static::$lista_info);
        $campos_para_select = static::$campo_id.",". $campos_para_select;
        $resultado = $db->ejecutar("SELECT $campos_para_select FROM $nombre_tabla;");
        $resultado = array_map(function($datos) {
            $nombre_clase = get_called_class();//Obtendra el nombre de mis hijos
            return new $nombre_clase($datos);
        },$resultado);
        return $resultado;
    }//getAllNoticias

    

    public function __construct($data_row = []) 
    {
        $this->db = App::getDB();
        // self::$lista_info = ['id','titulo',+'texto','fecha'];

        // Si me pasan datos en el constructor
        //     completo los datos en mi $lista_info, que es mi lista de datos que se
        //     iran metiendo en mi DB
        if (count($data_row) == 0) {
            $this->id = null;
            $this->data = array_fill_keys(static::$lista_campos_insert,null);
        }
        // Si no 
        //     combina los datos de data_row con lista_info por que tienes datos en el constructor
        else{
            // print_r($data_row);
            // print_r($this->data);
            // **Saltaba error por que el array_combine necesita tener el mismo numero de keys, que de values 
            // entre los 2 arrays que se le pasan**

            if (count($data_row)-1 == count(static::$lista_info)) {
                // Comporobacion cahpuza (Pendiente mejora)
                // Si el numero de campos que me pasan en el constructor menos (-1(id))
                // es igual a los campos de lista info reparto los datos para mostrar o modificar.
                $this->id = array_shift($data_row);
                $this->data = array_combine(static::$lista_info, $data_row);
            }else if(count($data_row) == count(static::$lista_campos_insert)){
                // Comporobacion cahpuza (Pendiente mejora)
                // Si el numero de campos que me pasan en el constructor es igual a 
                // lista_campos_insert es que van a hacer un insert nuevo con unos campos especificos.
                $this->data = array_combine(static::$lista_campos_insert, $data_row);
            }
            
        }
    }//construct
    public function estaEnListaDatos($nombre)
    {
        $hayCampo = in_array($nombre, static::$lista_info);
        $hayId = array_key_exists($nombre, get_class_vars(get_called_class()));
        if ($hayCampo || $hayId) {
            return true;
        }else{
            return false;
        }
    }
    /**
     * Esta es la invocacion de los objetos
     * setAlgo, setOtracosa
     * getAlgo, getOtracosa
     */
    public function __call($nombre,$dato)
    {
        $dato_pedido = strtolower(substr($nombre,3));
        $accion = substr($nombre, 0 , 3);
        if (!$this->estaEnListaDatos($dato_pedido)) {
            return "Error";
        }//if

        if ($accion == "get") {
            if (strpos($nombre,"Id")) {
                return $this->id;
            }else{
                return $this->data[$dato_pedido];
            }
        }else if ($accion == "set") {
            // En esta linea se obtiene el primer valor del array (como el titulo)
            // para evitar que el usuario te meta un array completo
            return $this->data[$dato_pedido] = $dato[0];
        }//else
    }//__call



    public static function getById($id)
    {
        $db = App::getDB();//Solo devuelve la DB

        $nombre_clase = get_called_class();//Obtendra el nombre de mis hijos
        $nombre_tabla = static::$tabla;
        $campos_para_select = implode(",",static::$lista_info);
        $campos_para_select = "id," . $campos_para_select;
        $resultado = $db->ejecutar("SELECT $campos_para_select FROM $nombre_tabla WHERE id = ?;", $id);
        return new $nombre_clase($resultado[0]);
        // return $resultado[0];

    }//getById
    
    public function save()
    {
        // INSERT
        $db = App::getDB(); //Solo devuelve la DB
        $nombre_tabla = static::$tabla;
        $campos_para_insert = implode(",",static::$lista_campos_insert);
        $parametros_para_insert = implode(",",array_fill(0,(count(static::$lista_campos_insert)), "?"));
        if ($this->getId() == null) {
            $sql_insert = "INSERT INTO $nombre_tabla ($campos_para_insert) VALUES ($parametros_para_insert);";

            //print_r(array_values(array_slice($this->data,1)));
            $resultado = $this->db->ejecutar($sql_insert, ...array_values($this->data));
            if (is_array($resultado)) {
                $this->setId($this->db->getLastId());
                $resultado[] = $this->getId();
            }

            return $resultado;
            
        }
        // UPDATE
        else{
            $campos_up_completos = "";
            $campos_up = static::$lista_info;
            foreach ($campos_up as $value) {
                $campos_up_completos  .= "$value=?,";
            }//forE
            $campos_up_completos = substr($campos_up_completos,0, strlen($campos_up_completos) - 1);
            echo "<pre>";
            echo "asdasd";
            echo $this->id;
            echo "asdasd";
            print_r($this->data);
            echo "</pre>";
            //die();
            $sql_update = "UPDATE $nombre_tabla set $campos_up_completos where id = " . $this->id;

            $resultado = $this->db->ejecutar($sql_update,...array_values($this->data));
            if (is_array($resultado)) {
                $this->setId($this->db->getLastId());
                $resultado []= $this->getId();
            }
            
            
            return $resultado;
        }//else
    }//save

    public function toArray()
    {
        $this->data['id'] = $this->id;
        return $this->data;
    }
    

}//BaseModel


?>