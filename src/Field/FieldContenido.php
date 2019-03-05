<?php 

/**
 * 
 */
class FieldContenido extends BaseField
{
	function validar(): bool 
	{
		$tamContenido = strlen($this->dato);
		$valido = true;
		
		if ($tamContenido > 500 || $tamContenido < 10) {
			$valido = false;
			$this->error = "El contenido es demasiado largo.";
		}
		return $valido;
	}

	public function pintar(){
		$label = "<span class='titulo-campo'>$this->nombre: </span> <br> <textarea name='$this->nombre' >$this->dato</textarea>";
		echo $label;
		if($this->error){
            echo "<br><span class='error-campo'>$this->error</span>";
        }
	}
}

 ?>