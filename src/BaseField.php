<?php

abstract class BaseField {
    protected $nombre; // Nombre del campo
    protected $dato; // Es el valor que se va a introducir en el campo 
    protected $error;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function estableceInfo($dato) {
        $this->dato = $dato;
    }

    public function obtenerError(){
        return $this->error;
    }

    public function obtenerInfo() {
        return $this->dato;
    }
    /**
    * Funcion que valida los datos devolviendo
    * true en caso de que los datos sean validos
    y false en caso contrario  
    **/
    public abstract function validar():bool;
    
    /**
    * Funcion para definir como se pintará 
    * cada campo del fomulario
    **/
    public abstract function pintar();
}//BaseField

?>