<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pista", mappedBy="id_deporte", orphanRemoval=true)
     */
    private $pistas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Clase", mappedBy="id_deporte", orphanRemoval=true)
     */
    private $clases;

    public function __construct()
    {
        $this->pistas = new ArrayCollection();
        $this->clases = new ArrayCollection();
    }

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

    /**
     * @return Collection|Pista[]
     */
    public function getPistas(): Collection
    {
        return $this->pistas;
    }

    public function addPista(Pista $pista): self
    {
        if (!$this->pistas->contains($pista)) {
            $this->pistas[] = $pista;
            $pista->setIdDeporte($this);
        }

        return $this;
    }

    public function removePista(Pista $pista): self
    {
        if ($this->pistas->contains($pista)) {
            $this->pistas->removeElement($pista);
            // set the owning side to null (unless already changed)
            if ($pista->getIdDeporte() === $this) {
                $pista->setIdDeporte(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Clase[]
     */
    public function getClases(): Collection
    {
        return $this->clases;
    }

    public function addClase(Clase $clase): self
    {
        if (!$this->clases->contains($clase)) {
            $this->clases[] = $clase;
            $clase->setIdDeporte($this);
        }

        return $this;
    }

    public function removeClase(Clase $clase): self
    {
        if ($this->clases->contains($clase)) {
            $this->clases->removeElement($clase);
            // set the owning side to null (unless already changed)
            if ($clase->getIdDeporte() === $this) {
                $clase->setIdDeporte(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nombre_deporte;
    }
}
