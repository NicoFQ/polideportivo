<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoBonoRepository")
 */
class TipoBono
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
    private $nombre_bono;

    /**
     * @ORM\Column(type="integer")
     */
    private $duracion_dias;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreBono(): ?string
    {
        return $this->nombre_bono;
    }

    public function setNombreBono(string $nombre_bono): self
    {
        $this->nombre_bono = $nombre_bono;

        return $this;
    }

    public function getDuracionDias(): ?int
    {
        return $this->duracion_dias;
    }

    public function setDuracionDias(int $duracion_dias): self
    {
        $this->duracion_dias = $duracion_dias;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}
