<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Noticia;

class NoticiaFixures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $noticia_1 = new Noticia();
        $noticia_1->setTitulo("Muere un Fixture en Symfony");
        $noticia_1->setContenido("El hecho sucedio la pasada madrugada tras entrar a un merge. Relatan los testigos que intentaba robar datos.");
        $manager->persist($noticia_1);

        $manager->flush();
    }
}
