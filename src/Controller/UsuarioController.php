<?php

namespace App\Controller;

use App\Repository\NoticiaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Usuario;
use App\Repository\AsisteRepository;
use App\Repository\GustosUsuariosRepository;
use App\Repository\UsuarioRepository;
use App\Repository\ClaseRepository;
use App\Repository\InstalacionRepository;
use App\Repository\PistaRepository;

class UsuarioController extends AbstractController
{
    /**
     * @Route("/usuario", name="usuario")
     
    public function prueba()
    {

    	define("FULL_USER", "FULL_USER");
    	$sesion = new Session(); 
    	$cliente = $this->getDoctrine()->getRepository(Usuario::class)
    	$sesion->set(FULL_USER,$cliente);
    	$fullUser = $sesion->get(FULL_USER);
    	$data = $this->getDoctrine()->getRepository(Clase::class)->findClasesById(6);
        return $this->render('usuario/index.html.twig', [
            'data' => $data
        ]);
    	return $this->render('usuario/index.html.twig', [ 
    		'fullUser' => $fullUser,
    		'clases' => $data
    		]
    ); 

    }

    /**
     * @Route("/usuario", name="usuario")
     */
    public function index(AsisteRepository $asiste, GustosUsuariosRepository $gustos, UsuarioRepository $em){

        $userSesion = new Session();
        $userSesion = $userSesion->getUser();
        $asistencias = $asiste->usuarioAsiste($userSesion->getId());
        $misGustos = $gustos->findById(1);
        $data = $em->getUserActivity(6);
       
        //$asistencias = $asiste->usuarioAsiste(6);
        return $this->render('usuario/index.html.twig', [
            'fullUser' => $userSesion,
            'asistencias' => $asistencias,
            'gustos' => $gustos,
            'data' => $data,
        ]);
    }

    /**
     * @Route("/usuario/configuracionPerfil", name="usuario_configuracion")
     */
    public function configurarPerfil()
    {
        return $this->render('usuario/configuracionPerfil.html.twig', [
            "" => ""
        ]);
    }
    /**
     * @Route("/usuario/noticias", name="noticias")
     */
    public function noticias(NoticiaRepository $noticiaRepository)
    {
        return $this->render('usuario/noticias.html.twig', [
            'noticias' => $noticiaRepository->findAll(),
        ]);
    }

     /**
     * @Route("/usuario/reservas", name="reservarClase")
     */
    public function reservas(ClaseRepository $clases)
    {   
        $fecha = date("Y-m-d");
        return $this->render('usuario/reservas.html.twig', [
            "nombreClases" => $clases ->nombreClases(),
            "fechaNow" => $fecha,
        ]);
    }
    /**
     * @Route("/usuario/reservas/data", name="reservarClase_data_json")
     */
    public function datosClaseJson ()
    {
        return new JsonResponse($_GET);

    }

      /**
     * @Route("/usuario/reservasIndex", name="usuario_reserva")
     */
    public function reservasIndex()
    {
        return $this->render('usuario/reservasIndex.html.twig', [
            "" => ""
        ]);
    }

     /**
     * @Route("/usuario/reservaInstalaciones", name="reservarInsta")
     */
    public function reservaInstalaciones(PistaRepository $pista)
    {   
        $fecha = date("Y-m-d");
        return $this->render('usuario/reservaInstalaciones.html.twig', [
            "nombrePista" => $pista ->nombrePista(),
            "fechaNow" => $fecha,
        ]);
    }
}
