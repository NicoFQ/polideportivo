<?php

namespace App\Controller;

use App\Repository\PagoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class PaypalController extends AbstractController
{
    private $sess;
    /**
     * @Route("/paypal", name="paypal")
     */
    public function index()
    {
        $clientID = "AaHd6ddLFfI2U-K9mc7Hl4IiaY-api9EBhqiQ3RmpM7_08YqlztiOnEn5RgUfT5nfSFIexicYq65WPiV";
        $clientSecret = "EI47fI2wIXdW6IiCx1duFGYkNPCGJK27z042y1N5aDcXNCyuNIqI4qDyDbU_1XISoSvsdmhJQNZL_Q0C";
        $this->sess = new Session();
        $precio = (!empty($this->sess->get("precio"))) ? $this->sess->get("precio"): 25;
//        dump($this->sess->get("datosPago"));die;
        return $this->render('paypal/index.html.twig', [
            'id' => $clientID,
            'secret' => $clientSecret,
            'precio' => $precio
        ]);
    }

    /**
     * @Route("/paypal/transaction-complete", name="paypal-transaction")
     */
    public function transactionComplete(PagoRepository $pagoDB)
    {
        $data = json_encode($_POST);
        $this->sess = new Session();
        if (!empty($data)){
            $dataInsert = $this->sess->get("datosPago");
            if ($pagoDB->guardarPago($dataInsert)){
                $data = "done";

            }else{
                $data = "fail";
            }

        }
        return new RedirectResponse("/usuario");
//        return new JsonResponse(['res' => $data]);
    }


}
