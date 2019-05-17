<?php

namespace App\Controller;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index()
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

    public function searchBar(Request $request)
    {
        $form = $this->createFormBuilder(null)
            ->setAction($this->generateUrl("buscar"))
            ->setMethod("POST")
            ->add('dni', TextType::class,[
                'label' => "Introduzca el DNI "
            ])
            ->add('Buscar', SubmitType::class,[
                'attr' => [
                    'class' => 'btn, btn-primary'
                ]
            ])
            ->getForm();
        $form->handleRequest($request);

        return $this->render('search/searchBar.html.twig', [
           'searchBar' => $form->createView()
        ]);
    }

}
