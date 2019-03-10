<?php 

class ControllerPaypal extends BaseController
{
    // protected static $requiere_autentificacion = ['edit','add'];
    public function paypal()
    {
        if (!empty($_POST)) {
            ModelPaypal::hacerPago($_POST["precio"],$_POST["producto"]);
        }
        
    }
    
}//ControllerPaypal


?>
