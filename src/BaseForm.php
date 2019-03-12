<?php
/***
Requisitos:
  Esta clase gestiona el pintado de los campos del formulario cuando se visita
  por primera vez.

  Esta clase gestiona el pintado de los datos previos y los errores cuando se
  envía la información.

  Esta clase permite construir un formulario en base a un id, de esta forma se
  edita el elemento.

Situaciones a tener en cuenta:
1º.- Si nos crean sin nada renderizamos un formulario en base a los campos.
2º.- Si nos crean con un array consideramos que el formulario es enviado y
      procesamos los datos.
3º.- Si nos crean con un id, consideramos que vamos a editar una entidad.
*/

class BaseForm
{
    protected static $lista_info;
    protected static $lista_tipo;
    protected static $lista_label;
    protected static $clase_modelo_asociado;
    protected static $mensaje_error;
    protected static $submit;

    private $campos;
    private $errores;
    private $modelo;

    private function estaEnListaDatos($nombre) {
        return in_array($nombre, static::$lista_info);
    }

        public function __construct($data_row = []) 
    {
        $this->errores = false;
        //
        // Creo los campos de información con su nombre
        //

        $campos = [];
        for($i=0;$i<count(static::$lista_tipo);$i++){
            $nombre_campo = static::$lista_info[$i]; // = ['email', 'contrasena']; 
            $tipo_campo = static::$lista_tipo[$i]; // = ['FieldTextLogin','FieldTextLogin'];
            
            $campos[] = new $tipo_campo($nombre_campo); 
            $campos[$i]->estableceLabel(static::$lista_label[$i]); 
            // [[0] => FieldTextLogin Object, [1] => FieldTextLogin Object]
            
        }

        //
        // Los meto en el array asociativo
        //   id => new FieldID('id')
        //   campo1 => new FieldTipo('nombre_de_campo')
        //

        $this->campos = array_combine(static::$lista_info, $campos);
        
        /*
        * $this->campos[
        *       [titulo] => FieldTitulo Object,
        *       [contenido] => FieldContenido Object,
        *       [etiquetas] => FieldEtiquetas Object
        *              ] 
        */


        // Si se le pasan datos en el constructor 
        
        if(count($data_row)>0){
            //
            // Tengo datos:
            //    Bien por POST
            //    Bien por edición
            //
            // Relleno los datos de los campos
            //    También los valido
            //
            // Los meto en el array asociativo
            //   id => new FieldID('id')
            //            ->estableceInfo(4);
            //            ->validar()
            //   campo1 => new FieldTipo('nombre_de_campo')
            //            ->estableceInfo('valor1');
            //            ->validar()
            //
            // Si alguno da error, establezco que hay errores

                                  //[titulo]      FieldTitulo Object
                                  //[contenido]   FieldContenido Object,
                                  //[etiquetas]   FieldEtiquetas Object

            foreach ($this->campos as $nombre => &$campo) { 
                $campo->estableceInfo($data_row[$nombre]); 
                // Si la validacion de algun campo no es correcta errores pasa a true;
                if(!$campo->validar()){ $this->errores = true; } 
            }
        }
        // Si se crea este objeto y hay datos en POST 
        if(count($_POST)>0){
            if($this->datosValidos()){ // Si ninguno de los campos ha falldo;
                // Entonces
                $datos = array_map(function ($campo){               
                    return $campo->obtenerInfo();
                }, $this->campos);  /* $this->campos[
                                    *       [titulo] => FieldTitulo Object,
                                    *       [contenido] => FieldContenido Object,
                                    *       [etiquetas] => FieldEtiquetas Object
                                    *              ] 
                                    */
                /* $datos
                    Array
                    (
                        [titulo] => Primera prueba
                        [contenido] => Este es un campo de prueba
                        [etiquetas] => hola que tal
                        )
                */
                $datos = array_combine(static::$lista_info, $datos);
                //debug_print_backtrace();
                if (static::$clase_modelo_asociado == 'ModelLogin') {
                    ModelLoginForm::logInForm();
                    
                }elseif (static::$clase_modelo_asociado == 'ModelUsuario') {
                    ModelUsuario::registrar($_POST);
                }
                else{
                    $this->modelo = new static::$clase_modelo_asociado($datos);
                }
            }
        }
    }

    function datosValidos(){
        return !$this->errores;
    }

    function pintar() {
        ob_start();
        if (!$this->datosValidos()) {
            echo "<span>".static::$mensaje_error['ERROR_FIELD']."</span>";
        }
        if (empty(static::$mensaje_error['ERROR_AUTH'])) {
            echo "<span>".static::$mensaje_error['ERROR_AUTH']."</span>";
        }else{
            echo "<span>".static::$mensaje_error['ERROR_AUTH']."</span>";
        }
        
            echo "<span>".static::$mensaje_error['ERROR_AUTH']."</span>";
        echo "<form action='#' method='post'>";
        foreach ($this->campos as $campo) {
            $campo->pintar();
            echo "<br>";
        }
        $submit = static::$submit;
        echo "<input type='submit' value='$submit' id='btn-login' class='btn btn-custom btn-lg btn-block button-submit'/>";
        echo "</form>";

        return ob_get_clean();
    }

    function guardaInformacion() {
        $this->modelo->save();
    }
}
?>

