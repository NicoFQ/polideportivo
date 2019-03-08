<?php

class FieldTextLogin extends BaseField
{
    
    public function validar():bool {

        if(strlen($this->dato)==0 ||
           $this->dato == null ||
           empty($this->dato)){
            
            $this->error = "Debe tener información";
            return false;
        } else {
            return true;
        }
    }

    public function pintar() {
        echo "<input type='text' name='$this->nombre' value='$this->dato' />";
        if($this->error){
            echo "$this->error";
        }
    }
}

?>