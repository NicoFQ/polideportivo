<?php 
	class ControllerForo extends BaseController
	{
		
		function index()
		{
			$this->data = ModelForo::getAll();
		}

		public function crear(){

			$formulario = new ModelForoForm($_POST, false);

			if (count($_POST) > 0 && $formulario->datosValidos()) {
				$formulario->guardaInformacion();
			}
            $this->data['form'] = $formulario->pintar();
		}





	}

 ?>