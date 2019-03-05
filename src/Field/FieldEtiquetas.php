<?php 

/**
 * 
 */
class FieldEtiquetas extends BaseField
{
	
	function validar(): bool 
	{
		$valido = true;
		$tamEtiquetas = strlen($this->dato);
		if ($tamEtiquetas > 50) {
			$valido = false;
			$this->error = "Hay demasiadas etiquetas.";
		}
		return $valido;
	}

	public function pintar(){
		$label = "<span class='titulo-campo'>$this->nombre: </span> <br> <input type='text' name='$this->nombre' value='$this->dato'>";
		echo $label;
		if($this->error){
            echo "<br><span class='error-campo'>$this->error</span>";
        }
	}
}

 ?>