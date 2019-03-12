<?php 

class FieldEmail extends BaseField
{
    public function validar():bool {
        if(strlen($this->dato)==0){
            $this->error = "<span class='text-danger bg-warning'>Debes introducir un email valido.</span>";
            return false;
        } else {
            return true;
        }
    }

    public function pintar() {
        echo "<div>";
        echo "<label for='$this->nombre'>$this->nombre :</label>";
        echo "<input type='email' name='$this->nombre' value='$this->dato' class='form-control'/>";
        if($this->error){
            echo "$this->error";
        }
        echo "</div>";
    }
}

 ?>