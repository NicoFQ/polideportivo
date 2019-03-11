<?php

class FieldPass extends BaseField
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
        echo "<label for='$this->nombre'>$this->label :</label>";
        echo "<input type='password' name='$this->nombre' value='$this->dato' />";
        if($this->error){
            echo "$this->error";
        }
        echo "</div>";
        
        
    }
}

?>