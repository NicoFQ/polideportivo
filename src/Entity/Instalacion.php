<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InstalacionRepository")
 */
class Instalacion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_instalacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreInstalacion(): ?string
    {
        return $this->nombre_instalacion;
    }

    public function setNombreInstalacion(string $nombre_instalacion): self
    {
        $this->nombre_instalacion = $nombre_instalacion;

        return $this;
    }
}
