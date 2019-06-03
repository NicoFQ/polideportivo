<?php

namespace App\Controller;

use App\Form\PagoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagoController extends AbstractController
{
    /**
     * @Route("/pago", name="pago")
     */
    public function index()
    {
        $form = $this->createForm(PagoType::class,null);
        return $this->render('pago/index.html.twig', [
            'form_view' => $form->createView()
        ]);
    }
}
