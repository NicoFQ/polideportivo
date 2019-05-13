<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
//use http\Env\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioTestController extends AbstractController
{
    /**
     * @Route("/usuario/test", name="usuario_test")
     */
    public function index(UsuarioRepository $em)
    {
        $data = $em->getDataUser(2);
//        dump();die;
//        $template = $this->renderView('usuario_test/index.html.twig',[
//           'data' => $this->json(["user" => $data])
//        ]);
        $response = new JsonResponse();
        $response->setData(["data" => $data]);
        return new JsonResponse(["user" => $data]);

//        return $this->render('usuario_test/index.html.twig', [
//            'data' => "idk"
//        ]);
    }
}
