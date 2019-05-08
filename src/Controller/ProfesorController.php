<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use App\Repository\ClaseRepository;
use App\Repository\AsisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfesorController extends AbstractController
{
    /**
     * @Route("/profesor", name="profesor")
     */
    public function index(ClaseRepository $em, AsisteRepository $usu)
    {
        //Tenemos que sacar el $id de la session
        //$id = $_SESSION['id_usuario'];
        // dump($token);die;
        $id = 9;
        $arrApun = [];
        $arrFechas = [];
        $contador = 0;
        $clasesProfesor = $em -> getClaseImparte($id);
    //    dump($clasesProfesor);
    //     die();
         foreach($clasesProfesor as $key => $value){
            if($contador % 2 == 0){
                $t = $value -> getid();
                $fe = $usu -> getFechaClase($t);
                $a = array_pop($fe);
                $l = array_pop($a);
                array_push($arrFechas,$l);
                $x = $usu ->  getUsuApuntados($t);
                $f = array_pop($x);
                $d = array_pop($f);
                array_push($arrApun,$d);
            }
            ++$contador;
           
         }
         for ($i=1; $i <= sizeof($clasesProfesor) ; $i = $i + 2) { 
             unset($clasesProfesor[$i]);
         }
        return $this->render('profesor/index.html.twig', [
            'clases' => $clasesProfesor,
            'fechas' => $arrFechas,
            'apuntados' => $arrApun,
        ]);
    }
}
