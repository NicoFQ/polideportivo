<?php

class FieldText extends BaseField
{
    public function validar():bool {
        if(strlen($this->dato)==0){
            $this->error = "<span class='text-danger'>Debe tener información</span>";
            return false;
        } else {
            return true;
        }
    }

    public function pintar() {
        echo "<div>";
        echo "<label for='$this->nombre'>$this->label :</label>";
        echo "<input type='text' name='$this->nombre' value='$this->dato' class='form-control'/>";
        if($this->error){
            echo "$this->error";
        }
        echo "</div>";
        
        
    }
}

?>