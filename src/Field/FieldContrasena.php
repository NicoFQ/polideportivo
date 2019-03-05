<?php 

/**
 * 
 */
class FieldContrasena extends BaseField
{
	function validar(): bool 
	{
		$tamContenido = strlen($this->dato);
		$valido = true;
		
		if ($tamContenido < 4 ) {
			$valido = false;
			$this->error = "La contrasena es demasiado corta.";
		}
		return $valido;
	}

	public function pintar(){
		$label = "<span class='titulo-campo'>$this->nombre: </span> <br> <input type='password' name='$this->nombre'>";
		echo $label;
		if($this->error){
            echo "<br><span class='error-campo'>$this->error</span>";
        }
	}
}

 ?>