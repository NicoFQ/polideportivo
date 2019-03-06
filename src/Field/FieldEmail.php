<?php 

class FieldEmail extends BaseField
{
    public function validar():bool {
        if(strlen($this->dato)==0){
            $this->error = "Introduce un email valido.";
            return false;
        } else {
            return true;
        }
    }

    public function pintar() {
        echo "$this->nombre :";
        echo "<input type='email' name='$this->nombre' value='$this->dato'/>";
        if($this->error){
            echo "$this->error";
        }
    }
}

 ?>