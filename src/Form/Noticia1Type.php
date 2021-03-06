<?php

namespace App\Form;

use App\Entity\Noticia;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Noticia1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('contenido')
            ->add('img_noticia',null,[
                "label" => "Imagen de la noticia"
            ])
            ->add('fecha_creacion')
            ->add('fecha_modificacion',null,[
                "mapped" => false,
                "data" => new \DateTime('@'.strtotime('now')),

            ])
            ->add('autor')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Noticia::class,
        ]);
    }
}
