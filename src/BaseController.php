<?php

/** 
 * Controlador base que heredaran el resto de controladores
*/
class BaseController  
{
    protected $data;
    /* Es una lista de vistas que requieren autentificación */
    protected static $requiere_autentificacion = [];

    public function __construct($data = array()) {
        $this->data = $data;
    }
    // Esta funcion rellenara los datos
    public function procesaAccion($metodo, $parametros)
    {
        $noAutorizado = in_array($metodo, static::$requiere_autentificacion);
        $haySesion = Session::getInstance()->get('AUTH');
        if($noAutorizado && !$haySesion){
            App::getRouter()::redirect(Config::get('ruta.defecto'));
        }
        // Al poner los "..." al principio, hace que los parametros
        // sean variables que se iran pasando 1 a 1
        $this->$metodo(...$parametros);
        $vista = new View($this->data);
        
        return $vista->render($this->data);
    }//procesaAccion
    
}//BaseController
?>