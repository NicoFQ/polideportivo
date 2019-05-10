<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservaRepository")
 */
class Reserva
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $precio_reserva;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_de_reserva;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hora_inicio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hora_fin;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_creacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="reservas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pista", inversedBy="reservas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pista;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrecioReserva(): ?float
    {
        return $this->precio_reserva;
    }

    public function setPrecioReserva(float $precio_reserva): self
    {
        $this->precio_reserva = $precio_reserva;

        return $this;
    }

    public function getFechaDeReserva(): ?\DateTimeInterface
    {
        return $this->fecha_de_reserva;
    }

    public function setFechaDeReserva(\DateTimeInterface $fecha_de_reserva): self
    {
        $this->fecha_de_reserva = $fecha_de_reserva;

        return $this;
    }

    public function getHoraInicio(): ?string
    {
        return $this->hora_inicio;
    }

    public function setHoraInicio(string $hora_inicio): self
    {
        $this->hora_inicio = $hora_inicio;

        return $this;
    }

    public function getHoraFin(): ?string
    {
        return $this->hora_fin;
    }

    public function setHoraFin(string $hora_fin): self
    {
        $this->hora_fin = $hora_fin;

        return $this;
    }

    public function getFechaCreacion(): ?\DateTimeInterface
    {
        return $this->fecha_creacion;
    }

    public function setFechaCreacion(\DateTimeInterface $fecha_creacion): self
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
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

    public function getPista(): ?Pista
    {
        return $this->pista;
    }

    public function setPista(?Pista $pista): self
    {
        $this->pista = $pista;

        return $this;
    }
}
