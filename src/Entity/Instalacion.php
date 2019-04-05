<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pista", mappedBy="id_instalacion", orphanRemoval=true)
     */
    private $pistas;

    public function __construct()
    {
        $this->pistas = new ArrayCollection();
    }

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
            $pista->setIdInstalacion($this);
        }

        return $this;
    }

    public function removePista(Pista $pista): self
    {
        if ($this->pistas->contains($pista)) {
            $this->pistas->removeElement($pista);
            // set the owning side to null (unless already changed)
            if ($pista->getIdInstalacion() === $this) {
                $pista->setIdInstalacion(null);
            }
        }

        return $this;
    }
}
