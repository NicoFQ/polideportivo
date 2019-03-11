<?php

abstract class BaseField {
    protected $nombre;
    protected $dato;
    protected $error;
    protected $label;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function estableceInfo($dato) {
        $this->dato = $dato;
    }
    public function estableceLabel ($dato){
        $this->label = $dato;
    }

    public function obtenerError(){
        return $this->error;
    }

    public function obtenerInfo() {
        return $this->dato;
    }

    public abstract function validar():bool;
    public abstract function pintar();
}//BaseField

?>