<?php 
class ControllerUsuario extends BaseController
{
	public function inicio(){
		//echo Session::getInstance()->get(Config::get('session.user'));
		$this->data['user'] = json_decode(Session::getInstance()->get(Config::get('session.user')));
		$this->data['user_prefs'] = ModelUsuario::getGustos($this->data['user']->id_usuario);
		$this->data["nav_cliente"] = true;
	}
	public function noticias(){
		$this->data['noticias'] = ModelNoticia::getAll();
		$this->data["nav_cliente"] = true;
	}

	public function localizacion(){$this->data["nav_cliente"] = true;}
	public function reservas(){$this->data["nav_cliente"] = true;}

	public function clasesDisponibles()
	{
		$this->data["datos_clases"] = ModelUsuario::getDatosClases();
		$this->data["nav_cliente"] = true;
	}//clasesDisponibles
        
        public function reservarPista(){
          //  $view = new View();
            $this->data['deportes'] = ModelUsuario::todosDeporte();
            $_SESSION['listaDeportes'] = $this->data['deportes']; // Guardo en sesion para cuando vaya a pintar en 'confirmar' saber cual es el id asociado al deporte y no volver a buscar en BBDD
           // $salida = $view->render($this->data);
           // echo $salida;
        }
        
        
        public function confirmar(){
            if ( isset($_POST)) {
               // DATOS DEL FORMULARIO DE RESERVA
                $fecha = $_POST['fecha'];
                $idDeporte = $_POST['idDeporte'];
                $hora = $_POST['clases'];
                
                //VALORES DE SESION DE USUARIO EN JSON guardados en la sesion $_SESION[Config::get('session.user')]
                /*

                 * "id_usuario", 		"email", 		"dni",
		"nombre", 			"apellido_1",	"apellido_2", 
		"direccion",		"imagen_perfil","nombre_usuario", 
		"fecha_nacimiento",	"sexo", 		"nacionalidad",
		"id_tipo_usuario", 	"fecha_alta",
                 * 
                 * 
                 *                  */
                
                //guardar en $this->data para pasarselo a la vista confirmar para que lo pinte
                           
            }
        }
	
}//ControllerUsuario
?>