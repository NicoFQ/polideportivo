<?php

class ModelRegistroForm extends BaseForm
{
    

    protected static $lista_info = [	
        "dni", 
        "nombre",
        "apellido_1",

        "apellido_2", 
        "direccion",		
        "sexo",

        "email",
        "nacionalidad",        
        "nombre_usuario", 

        "contrasena",
        "fecha_nacimiento",
                        ];
        protected static $lista_label = [	
            "dni", 
            "nombre",
            "primer apellido",
    
            "segundo apellido", 
            "dirección",		
            "sexo",
    
            "email",
            "nacionalidad",        
            "nombre usuario", 
    
            "contraseña",
            "fecha de nacimiento",
                            ];
    protected static $lista_tipo = [
        'FieldText',
        'FieldText',
        'FieldText',

        'FieldText',
        'FieldText',
        'FieldRadio',

        'FieldEmail',
        'FieldText',
        'FieldText',

        'FieldPass',
        'FieldDate',
    ];
    protected static $submit = "Registrar";
    public static function getListaDatos()
    {
        return static::$lista_info;
    }
    protected static $clase_modelo_asociado = 'ModelUsuario';
}

?>