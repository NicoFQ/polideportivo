<?php

namespace App\Controller;

use App\Entity\Pago;
use App\Entity\Pista;
use App\Entity\Reserva;
use App\Entity\TipoBono;
use App\Entity\TipoPago;
use App\Form\PagoType;
use App\Form\ReservaType;
use App\Repository\PagoRepository;
use App\Repository\TipoBonoRepository;
use App\Repository\TipoPagoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;

class PagoController extends AbstractController
{
    /**
     * @Route("/pago", name="pago")
     */
    public function index(TipoPagoRepository $tipoPago, TipoBonoRepository $tipoBono)
    {

        $tipo_pago = $this->getDoctrine()->getRepository(TipoPago::class);
        $idPago = $tipoPago->getIdTipoPago("Paypal")[0]["id"];
        $nombreBono = "";

        $session = new Session();
        $usuario = new Session();
        $usuario = $usuario->getUser();

        $usuarioId = $usuario->getId();

        if (count(($_POST)) == 0) {
            return new RedirectResponse("/pago/planes");
        } else {
            $nombreBono = $_POST["bono"];
        }
        $idTiboBono = $tipoBono->getIdTipoBono($nombreBono)[0]["id"];
        $precio = $tipoBono->getIdTipoBono($nombreBono)[0]["precio"];

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

    /**
     * @Route("/pago/pagoInstalacion", name="pago_instalacion")
     */
    public function pagoInstalacion()
    {
        $clientID = "AaHd6ddLFfI2U-K9mc7Hl4IiaY-api9EBhqiQ3RmpM7_08YqlztiOnEn5RgUfT5nfSFIexicYq65WPiV";
        $clientSecret = "EI47fI2wIXdW6IiCx1duFGYkNPCGJK27z042y1N5aDcXNCyuNIqI4qDyDbU_1XISoSvsdmhJQNZL_Q0C";
        $session = new Session();
        $userName = $session->getUser()->getNombre()." ".$session->getUser()->getApellido1();

        $datosPago = $session->get("datosReservaInstalacion");
        $nombrePista = $this->getDoctrine()->getRepository(Pista::class)->find($datosPago["id_pista"])->getNombrePista();

//        PagoController.php on line 92:
//            array:6 [▼
//              "id" => 6
//              "horaInicio" => "14:00"
//              "horaFin" => "15:00"
//              "precio" => 15.0
//              "fecha" => "2019-06-28"
//              "id_pista" => "1"
//            ]
//        dump($datosPago);die;

        $form = $this->createForm(ReservaType::class, null)
            ->add("nombre", TextType::class, [
                "label" => "Nombre completo: ",
                "data" => $userName,
                "disabled" => true
            ])
            ->add("precio_reserva", TextType::class, [
                "data" => $datosPago["precio"] . "€",
                "disabled" => true
            ])
            ->add("fecha_de_reserva", TextType::class,[
                "label" => "Fecha de reserva",
                "data" => $datosPago["fecha"],
                "disabled" => true
            ])
            ->add("hora_inicio",TextType::class,[
                "label" => "Hora de inicio",
                "data" => $datosPago["horaInicio"],
                "disabled" => true
            ])
            ->add("hora_fin", TextType::class,[
                "label" => "Hora fin",
                "data" => $datosPago["horaFin"],
                "disabled" => true
            ])
            ->add("pista",TextType::class,[
                "label" => "Pista reservada",
                "data" => $nombrePista,
                "disabled" => true
            ])
            ->add("usuario",HiddenType::class,[
                "mapped" => false
            ])
            ->add("fecha_creacion",HiddenType::class,[
                "mapped" => false
            ])

        ;
        return $this->render('pago/pagoInstalacion.html.twig', [
            'form_view' => $form->createView(),
            'id' => $clientID,
            'secret' => $clientSecret,
            'precio' => $datosPago["precio"]
        ]);
    }
}
