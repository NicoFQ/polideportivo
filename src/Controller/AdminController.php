<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Repository\UsuarioRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\MonologBundle\SwiftMailer;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(UsuarioRepository $em)
    {
        /**
         * Tipos de usuario por ID
         * 1 = Admin (AD)
         * 2 = Profesor (PR)
         * 3 = Cliente (CL)
         */
        $clientes = $this->getDoctrine()->getRepository(Usuario::class)->findBy(['tipo_usuario' => 3]);
        $admins = $em->getTotalUsuariosBy('AD');
        $usuarios = $em->getTotalUsuariosBy('CL');
        $profesores = $em->getTotalUsuariosBy('PR');

        return $this->render('admin/index.html.twig', [
            'clientes' => $clientes,
            'admins' => $admins,
            'usuarios' => $usuarios,
            'profesores' => $profesores
        ]);
    }

    /**
     * @Route("/admin/empleados", name="empleados")
     */
    public function empleados(UsuarioRepository $em)
    {
        $empleados = $em->getEmpleados();
        return $this->render('admin/empleados.html.twig', [
            'empleados' => $empleados
        ]);
    }

    /**
     * @Route("/admin/modificar", name="modificar")
     */
    public function modificar()
    {
        return $this->render('admin/modificar.html.twig', [
            'modificar' => 'modificar'
        ]);
    }

    /**
     * @Route("/admin/email", name="email")
     */
    public function email(Request $request, \Swift_Mailer $mailer, UsuarioRepository $em)
    {
        $data = "";
        $emails = $em->getEmails();
        $emailsCompletos = "";
        foreach (array_values($emails) as $email){
            foreach ($email as $data){
                $emailsCompletos.=$data.", ";
            }
        }
        $emailsCompletos = substr($emailsCompletos,0,strlen($emailsCompletos)-2);


        $form = $this->createFormBuilder(null)

//            ->setAction($this->generateUrl('enviando'))
//            ->setMethod('GET')
            ->add('Asunto', TextType::class,[
                "attr" => [
                    "autofocus" => true
                ]
            ])
            ->add('De:',TextType::class, [
                'data' => 'polideportivo@gm.es',
                'disabled' => true
            ])
            ->add('Para',TextType::class,[
                "attr" => [
                    "placeholder" => $emailsCompletos
                ],
                "required" => false
//                "data" => $emailsCompletos
            ])
            ->add('Contenido',TextareaType::class,[
                "attr" => [
                    "id" => "contenido"
                ]
            ])
            ->add('Enviar', SubmitType::class,[
                'attr' => [
                    'class' => 'btn, btn-primary'
                ]
            ])
            ->getForm();

//        Si se ha enviado el form y el form es valido
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
                $data = $form->getData();

                $destinatario = $form->get("Para")->getData();
                if (empty($destinatario)){
                    $data["Para"] = $emailsCompletos;
                }
                $message = (new \Swift_Message('Swiftmailer'))
                    ->setCharset('iso-8859-2')
                    ->setFrom('taccdev44@gmail.com')

                    ->setTo($emails)
                    ->setBody(

                        $this->render(
                        // templates/emails/registration.html.twig
                            'admin/enviando.html.twig',[
                                "data" => $data
                        ]),

                        'text/html'
                    )
        //            ->attach(\Swift_Attachment::fromPath('/img/Python_para_todos.pdf'))
                ;

                $mailer->send($message);


                return new RedirectResponse('/admin');

        }
        return $this->render('/admin/email.html.twig', [
            'emailTemplate' => $form->createView(),
        ]);
    }//email

    /**
     * @Route("/admin/buscar/", name="buscar")
     */
    public function buscador ()
    {
        $dni  = $_POST["form"]["dni"];

        $cliente = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['num_documento' => $dni]);
        return $this->render('admin/buscador.html.twig', [
            'cliente' => $cliente
        ]);
    }

}//AdminController
