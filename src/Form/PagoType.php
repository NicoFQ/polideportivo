<?php

namespace App\Form;

use App\Entity\Pago;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\DataMapper\CheckboxListMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PagoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $fecha = date("d/m/Y");
        $usuario = new Session();
        $usuario = $usuario->getUser();


        $builder
            ->add('concepto', TextType::class,[
                "attr" => [
                    "placeholder" => "Suscripción mensual"
                ],
                "data" => "Suscripción mensual",
                "required" => false
            ])
            ->add('fecha_pago',TextType::class,[
                'data' => $fecha,
                'disabled' => true
            ])
            ->add('token_pago',HiddenType::class,[
                "mapped" => false
            ])
            ->add('usuario',TextType::class,[
                "data" => $usuario,
                "disabled" => true
            ])
            ->add('pago',TextType::class,[
                "data" => "PayPal",
                "label" => "Sistema de pago",
                "disabled" => true
            ])
            ->add('tipo_bono',HiddenType::class,[
                "mapped" => false
            ])
//            ->add("ENVIAR", SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pago::class,
        ]);
    }
}
