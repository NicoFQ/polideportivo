<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Usuario;
use App\Repository\AsisteRepository;
use App\Repository\GustosUsuariosRepository;

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
    public function index(AsisteRepository $asiste, GustosUsuariosRepository $gustos){

        $userSesion = new Session(); 
        $userSesion = $userSesion->getUser();
        $asistencias = $asiste->usuarioAsiste($userSesion->getId());
        $misGustos = $gustos->findById(1);
        //$asistencias = $asiste->usuarioAsiste(6);
        return $this->render('usuario/index.html.twig', [
            'fullUser' => $userSesion,
            'asistencias' => $asistencias,
            'gustos' => $gustos
        ]);
    }
}
