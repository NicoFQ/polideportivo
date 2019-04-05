<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DeporteRepository")
 */
class Deporte
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
    private $nombre_deporte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreDeporte(): ?string
    {
        return $this->nombre_deporte;
    }

    public function setNombreDeporte(string $nombre_deporte): self
    {
        $this->nombre_deporte = $nombre_deporte;

        return $this;
    }
}
