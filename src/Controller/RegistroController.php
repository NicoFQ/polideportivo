<?php

namespace App\Controller;

use App\Entity\TipoUsuario;
use App\Entity\Usuario;
use App\Form\RegistroType;
use App\Repository\UsuarioRepository;
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
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder, UsuarioRepository $userRepo)
    {
        $em = $this->getDoctrine()->getManager();//Conexion de base de datos

//        Consulta para sacar el tipo de cliente
        $cliente= $this->getDoctrine()->getRepository(TipoUsuario::class)->findOneBy(["nombre_tipo"=>"CL"]);

        $errors = [];

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
            $usuario->setImagenPerfil("/img/default.png");
            $existeNDocumento = $userRepo->comprobarNumDocumento($form->get("num_documento")->getData());
            $existeEmail = $userRepo->comprobarEmail($form->get("email")->getData());

            $usuario->setRoles(['ROLE_CLIENTE']);
            if (!empty($existeEmail)){
                $errors[] = "El email ya ha sido registrado, intentelo de nuevo.";
            }elseif (!empty($existeNDocumento)){
                $errors[] = "Ya tenemos registrado ese D.N.I / N.I.E";
            }else{
                $em->persist($usuario);

                $em->flush();
//            Si ha agregado al usuario a la BBDD, le redicreciona al login
                return new RedirectResponse('/');
            }

//            $em->persist($usuario);
//
//            $em->flush();
////            Si ha agregado al usuario a la BBDD, le redicreciona al login
//            return new RedirectResponse('/login');
        }
        return $this->render('registro/index.html.twig', [
            'form_view' => $form->createView(),
            'errors' => $errors
        ]);
    }
}
