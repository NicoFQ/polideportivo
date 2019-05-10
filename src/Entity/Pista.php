<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PistaRepository")
 */
class Pista
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
    private $nombre_pista;

    /**
     * @ORM\Column(type="float")
     */
    private $precio_hora;

    /**
     * @ORM\Column(type="integer")
     */
    private $disponible;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Deporte", inversedBy="pistas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_deporte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Instalacion", inversedBy="pistas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_instalacion;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reserva", mappedBy="pista", orphanRemoval=true)
     */
    private $reservas;

    public function __construct()
    {
        $this->reservas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrePista(): ?string
    {
        return $this->nombre_pista;
    }

    public function setNombrePista(string $nombre_pista): self
    {
        $this->nombre_pista = $nombre_pista;

        return $this;
    }

    public function getPrecioHora(): ?float
    {
        return $this->precio_hora;
    }

    public function setPrecioHora(float $precio_hora): self
    {
        $this->precio_hora = $precio_hora;

        return $this;
    }

    public function getDisponible(): ?int
    {
        return $this->disponible;
    }

    public function setDisponible(int $disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    public function setComentarios(?string $comentarios): self
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getIdDeporte(): ?Deporte
    {
        return $this->id_deporte;
    }

    public function setIdDeporte(?Deporte $id_deporte): self
    {
        $this->id_deporte = $id_deporte;

        return $this;
    }

    public function getIdInstalacion(): ?Instalacion
    {
        return $this->id_instalacion;
    }

    public function setIdInstalacion(?Instalacion $id_instalacion): self
    {
        $this->id_instalacion = $id_instalacion;

        return $this;
    }

    /**
     * @return Collection|Reserva[]
     */
    public function getReservas(): Collection
    {
        return $this->reservas;
    }

    public function addReserva(Reserva $reserva): self
    {
        if (!$this->reservas->contains($reserva)) {
            $this->reservas[] = $reserva;
            $reserva->setPista($this);
        }

        return $this;
    }

    public function removeReserva(Reserva $reserva): self
    {
        if ($this->reservas->contains($reserva)) {
            $this->reservas->removeElement($reserva);
            // set the owning side to null (unless already changed)
            if ($reserva->getPista() === $this) {
                $reserva->setPista(null);
            }
        }

        return $this;
    }
}
