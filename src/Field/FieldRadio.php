<?php

class FieldRadio extends BaseField
{
    public function validar():bool {
        if(strlen($this->dato)==0){
            $this->error = "Debe tener información";
            return false;
        } else {
            return true;
        }
    }

    public function pintar() {
        echo "<div>";
        echo "<label for='$this->nombre'>$this->nombre :</label>";
        echo "Hombre <input type='radio' name='$this->nombre' value='0'required >";
        echo "Mujer <input type='radio' name='$this->nombre' value='1' required >";
        if($this->error){
            echo "$this->error";
        }
        echo "</div>";
    }
}

?>