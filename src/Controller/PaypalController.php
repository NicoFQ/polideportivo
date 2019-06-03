<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PaypalController extends AbstractController
{
    /**
     * @Route("/paypal", name="paypal")
     */
    public function index()
    {
//        Esta funcion recibira la cantidad por post, se la enviara como una variable al render y este
//    hara el proceso de pago
//        Tipo de bono y concepto de lo enviamos desde php como variables
        $clientID = "AaHd6ddLFfI2U-K9mc7Hl4IiaY-api9EBhqiQ3RmpM7_08YqlztiOnEn5RgUfT5nfSFIexicYq65WPiV";
        $clientSecret = "EI47fI2wIXdW6IiCx1duFGYkNPCGJK27z042y1N5aDcXNCyuNIqI4qDyDbU_1XISoSvsdmhJQNZL_Q0C";
        $precio = 24.99;
        return $this->render('paypal/index.html.twig', [
            'id' => $clientID,
            'secret' => $clientSecret,
            'precio' => $precio
        ]);
    }

    /**
     * @Route("/paypal/transaction-complete", name="paypal-transaction")
     */
    public function transactionComplete()
    {
//        Si recibo todos los datos los guardo en la tabla datos
//        la fecha se establece desde php o desde la base de datos
        echo json_encode($_POST);
        $data = json_encode($_POST);
        return new JsonResponse(['res' => $data]);
    }


}
