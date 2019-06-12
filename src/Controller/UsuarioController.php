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
        $id = $userSesion->getId();
        $misGustos = $gustos->findById($id);

        $clasesString = array_map(function($arr){
            return $arr["titulo"];
        }, $em->getClasesUsuario($id));

        if (empty($clasesString)) {
            $sexo =  ($userSesion->getSexo() == 1) ? "a" : "o";
            $clasesString = "Aun no estas apuntad" . $sexo . " a ninguna de nuestras clases.";
        }else{
            $clasesString = implode(",", $clasesString); 
        }
        $gustos = "";
        if (!empty($misGustos[0]->getDeportesFavoritos())) {
            $gustos = str_replace("#", ", ", $misGustos[0]->getDeportesFavoritos());
        }else{
            $gustos = "Configura tu perfil para decirnos que deportes te gustan.";
        }

        $comentarios = "";
        if (!empty($misGustos[0]->getComentarios())) {
            $comentarios = $misGustos[0]->getComentarios();
        }else{
            $comentarios = "Configura tu perfil para contarnos algo sobre ti.";
        }




        //$asistencias = $asiste->usuarioAsiste(6);
        return $this->render('usuario/index.html.twig', [
            'user' => $userSesion,
            'img_user' => $userSesion->getImagenPerfil(),
            'gustos' => $gustos,
            'comentarios' => $comentarios,
            'clases' => $clasesString,
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
