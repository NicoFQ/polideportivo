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
        $instalacion_1->setNombreInstalacion("PABELLON 1");
        
        $instalacion_2 = new Instalacion();
        $instalacion_2->setNombreInstalacion("PABELLON 2");
        
        $instalacion_3 = new Instalacion();
        $instalacion_3->setNombreInstalacion("PABELLON 3");
        
        $manager->persist($instalacion_1);
        $manager->persist($instalacion_2);
        $manager->persist($instalacion_3);

        $manager->flush();
    }
}
