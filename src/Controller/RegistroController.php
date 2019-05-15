<?php

namespace App\Controller;

use App\Entity\TipoUsuario;
use App\Entity\Usuario;
use App\Form\RegistroType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="registro")
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $em = $this->getDoctrine()->getManager();//Conexion de base de datos

//        Consulta para sacar el tipo de cliente
        $cliente= $this->getDoctrine()->getRepository(TipoUsuario::class)->findOneBy(["nombre_tipo"=>"CL"]);

//        Usuario que se crea y recoge los datos del registro
        $usuario = new Usuario();
        $usuario->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario->setTipoUsuario($cliente);


        $form = $this->createForm(RegistroType::class, $usuario, [
            //Asi me envio el form a mi mismo para guardar los datos
            'action' => $this->generateUrl('registro')
        ]);

        //        Si se ha enviado el form y el form es valido
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $usuario->setContrasena(
                $passwordEncoder->encodePassword(
                    $usuario,
                    $form->get('contrasena')->getData()
                )
            );
            $usuario->setRoles(['ROLE_CLIENTE']);
//            dump($form->getData());die();
            $em->persist($usuario);

            $em->flush();
//            Si ha agregado al usuario a la BBDD, le redicreciona al login
            return new RedirectResponse('/login');
        }
        return $this->render('registro/index.html.twig', [
            'form_view' => $form->createView()
        ]);
    }
}
