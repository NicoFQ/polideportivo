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
        return new JsonResponse(["user" => $data]);
    }
    /**
     * @Route("/usuario/data", name="usuario_data")
     */
    public function data(UsuarioRepository $em)
    {
        $data = "";
        if (count($_POST) > 0){
            if ($em->updateUser($_POST["id"],$_POST["nombre"])){
                $data = "done";
            }else{
                $data = "error";
            }
        }else{
            $data = "no";
        }
        return new JsonResponse(['res' => $data]);
    }
}
