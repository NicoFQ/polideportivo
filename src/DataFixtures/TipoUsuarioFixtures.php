<?php

namespace App\DataFixtures;

use App\Entity\TipoUsuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TipoUsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $admin = new TipoUsuario();
        $admin->setNombreTipo("AD");

        $profesor = new TipoUsuario();
        $profesor->setNombreTipo("PR");

        $cliente = new TipoUsuario();
        $cliente->setNombreTipo("CL");


        $manager->persist($admin);
        $manager->persist($profesor);
        $manager->persist($cliente);

        $manager->flush();
    }
}
