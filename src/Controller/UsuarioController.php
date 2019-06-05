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
}
