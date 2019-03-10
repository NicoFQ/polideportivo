<?php 
class ModelPaypal extends BaseModel 
{
    public static function hacerPago($precio_producto, $id_producto)
    {
        include('paypalcheckout.php');
    }

}//ModelPaypal


?>
