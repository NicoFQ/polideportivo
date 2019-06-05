<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pago", mappedBy="tipo_bono", orphanRemoval=true)
     */
    private $pagos;

    public function __construct()
    {
        $this->pagos = new ArrayCollection();
    }

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

    /**
     * @return Collection|Pago[]
     */
    public function getPagos(): Collection
    {
        return $this->pagos;
    }

    public function addPago(Pago $pago): self
    {
        if (!$this->pagos->contains($pago)) {
            $this->pagos[] = $pago;
            $pago->setTipoBono($this);
        }

        return $this;
    }

    public function removePago(Pago $pago): self
    {
        if ($this->pagos->contains($pago)) {
            $this->pagos->removeElement($pago);
            // set the owning side to null (unless already changed)
            if ($pago->getTipoBono() === $this) {
                $pago->setTipoBono(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nombre_bono;
    }
}
