<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Instalacion;

class InstalacionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $instalacion_1 = new Instalacion();


        $manager->persist($instalacion_1);
        $manager->flush();
    }
}
