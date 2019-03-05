<?php 

/**
 * 
 */
class FieldTitulo extends BaseField
{
	public function validar(): bool {
		$tamTitulo = strlen($this->dato);
		if ($tamTitulo < 50 && $tamTitulo > 5) {
			return true;
		}else{
			$this->error = "Cumple con los requisitos del campo.";
			return false;
		}
	}

	public function pintar(){
		$label = "<span class='titulo-campo'>$this->nombre: </span> <br> <input type='text' name='$this->nombre' value='$this->dato'>";
		echo $label;
		if($this->error){
            echo  "<br><span class='error-campo'>$this->error</span>";
        }
	}
}

 ?>