<?php

namespace App\Form;

use App\Entity\Clase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre_clase')
            ->add('dias_semana')
            ->add('hora_inicio')
            ->add('hora_fin')
            ->add('max_alumnos')
            ->add('min_alumnos')
            ->add('disponible', ChoiceType::class,[
                "choices" => [
                    "Disponible" => 1,
                    "No disponible" => 0
                ],
                "label" => "Estado"
            ])
            ->add('id_deporte', null,[
                "label" => "Nombre deporte"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Clase::class,
        ]);
    }
}
