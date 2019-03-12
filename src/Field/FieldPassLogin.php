<?php 

class FieldPassLogin extends BaseField
{
	 public function validar():bool {

        if(strlen($this->dato)==0 ||
           $this->dato == null ||
           empty($this->dato)){
           $this->error = "ERROR_FIELD";
            return false;
        } else {
            return true;
        }
    }

    public function pintar() {
        echo "<input type='password' name='$this->nombre' value='' />";

    }

}

 ?>