<?php

namespace App\Controller;

use App\Entity\Pago;
use App\Entity\TipoBono;
use App\Entity\TipoPago;
use App\Form\PagoType;
use App\Repository\TipoBonoRepository;
use App\Repository\TipoPagoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class PagoController extends AbstractController
{
    /**
     * @Route("/pago", name="pago")
     */
    public function index(TipoPagoRepository $tipoPago, TipoBonoRepository $tipoBono)
    {

        $tipo_pago = $this->getDoctrine()->getRepository(TipoPago::class);
        $idPago = $tipoPago->getIdTipoPago("Paypal")[0]["id"];
//        $nombreBono = (!empty($_POST["bono"])) ? $_POST["bono"] : "basico";
        $nombreBono = "";

        if (count(($_POST)) == 0){
            return new RedirectResponse("/pago/planes");
        }else{
            $nombreBono = $_POST["bono"];
        }
        $idTiboBono = $tipoBono->getIdTipoBono($nombreBono)[0]["id"];
        $precio = $tipoBono->getIdTipoBono($nombreBono)[0]["precio"];

        $session = new Session();
        $usuario = new Session();
        $usuario = $usuario->getUser();

        $usuarioId = $usuario->getId();

        $form = $this->createForm(PagoType::class, null, [
            "method" => "POST",
            "action" => $this->generateUrl("paypal")
        ])
            ->add("precio", TextType::class, [
                "data" => $precio . ".00 €",
                "disabled" => true
            ]);
        $concepto = (!empty($form->get("concepto")->getData())) ? $form->get("concepto")->getData() : "Suscripción mensual";

        $datosPago = [
            "usuario_id" => $usuarioId,
            "id_tipo_bono" => $idTiboBono,
            "id_tipo_pago" => $idPago,
            "concepto" => $concepto,
        ];
        $session->set("datosPago", $datosPago);
        $session->set("precio", $precio);
        return $this->render('pago/index.html.twig', [
            'form_view' => $form->createView(),
        ]);
    }

    /**
     * @Route("/pago/planes", name="planes_de_pago")
     */
    public function planesDePago()
    {
        $tipo_bono = $this->getDoctrine()->getRepository(TipoBono::class);
        $basico = $tipo_bono->findBy(["nombre_bono" => "basico"])[0];
        $premium = $tipo_bono->findBy(["nombre_bono" => "premium"])[0];

        return $this->render('pago/planesDePago.html.twig', [
            "basico" => $basico,
            "premium" => $premium
        ]);
    }
}
