<?php

namespace App\Form;


use App\Entity\User;
use App\Entity\Usuario;
//use Doctrine\DBAL\Types\TextType;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                "label" => "Email (*)",
                'attr' => [
                    'placeholder' => 'Introduzca su email.',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank([
                        "message" =>  "Introduce un email valido."
                    ])
                ]
            ])
            ->add('nombre_usuario', TextType::class, [
                "label" => "nombre de usuario (*)",
            ])
            ->add('contrasena', PasswordType::class, [
                "label" => "Contraseña (*)",
                'attr' => [
//                    'pattern' => '[0-9][a-z]',
                    'placeholder' => 'Introduzca la contraseña.'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Introduce una contraseña valida'
                    ]),
                    new Length([
                        'min' => 4,
                        'minMessage' => 'El password debe tener {{limit}} caracteres'
                    ])
                ]
            ])
            ->add('num_documento',TextType::class,[
                "label" => "D.N.I (*)",
                "attr" => [
                    "placeholder" => "D.N.I / N.I.E"
                ]
            ])
            ->add('nombre',TextType::class,[
                "label" => "Nombre (*)"
            ])
            ->add('apellido_1', TextType::class, ['label' => 'Primer apellido (*)'])
            ->add('apellido_2', TextType::class, ['label' => 'Segundo apellido ', 'required' => false])
//            ->add('numero_telf', NumberType::class, ['label' => 'Numero de telefono'])
//            ->add('imagen_perfil', FileType::class, ['mapped' => false,'required' =>  false])
            ->add('sexo', ChoiceType::class,[
                "label" => "Sexo (*)",
                'choices' => [
                    'hombre' => 0,
                    'mujer' => 1

                ]
            ])
            ->add('fecha_alta', HiddenType::class,[
                'mapped' => false
            ])
            ->add('usuario_activo',HiddenType::class,[
                'data' => 1,
//                'mapped' => false,

            ])
            ->add('tipo_usuario', HiddenType::class,[
                'mapped' => false
            ])
            ->add('clases', HiddenType::class, [
                'mapped' => false
            ])

            ->add('Registrar',SubmitType::class, [
                "attr" => [
                    "class" => "link link-button"
                ]
            ])
        ;
//        $builder
//            ->add('email')
//            ->add('nombre_usuario')
//            ->add('contrasena')
//            ->add('num_documento')
//            ->add('nombre')
//            ->add('apellido_1')
//            ->add('apellido_2')
//            ->add('imagen_perfil')
//            ->add('sexo')
//            ->add('fecha_alta')
//            ->add('usuario_activo')
//            ->add('tipo_usuario')
//        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
        ]);
    }
}
