<?php

namespace App\Form;

use App\Entity\Clase;
use Symfony\Component\Form\AbstractType;
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
            ->add('disponible')
            ->add('id_deporte')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Clase::class,
        ]);
    }
}
