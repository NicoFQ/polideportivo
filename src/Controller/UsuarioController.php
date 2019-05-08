<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Usuario;

class UsuarioController extends AbstractController
{
    /**
     * @Route("/usuario", name="usuario")
     */
    public function index()
    {
    	define("FULL_USER", "FULL_USER");

    	$sesion = new Session(); 
    	$cliente = $this->getDoctrine()->getRepository(Usuario::class)
    									->findOneBy(["id" => 6]); 
    	
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

/*
        return $this->render('usuario/index.html.twig', [
            'controller_name' => 'Prueba',
        ]);
*/

    }
}
