<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AsisteRepository")
 */
class Asiste
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="asistes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clase", inversedBy="asistes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clase;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_asiste_clase;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getClase(): ?Clase
    {
        return $this->clase;
    }

    public function setClase(?Clase $clase): self
    {
        $this->clase = $clase;

        return $this;
    }

    public function getFechaAsisteClase(): ?\DateTimeInterface
    {
        return $this->fecha_asiste_clase;
    }

    public function setFechaAsisteClase(\DateTimeInterface $fecha_asiste_clase): self
    {
        $this->fecha_asiste_clase = $fecha_asiste_clase;

        return $this;
    }
}
