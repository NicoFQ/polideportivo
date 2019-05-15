<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
//
/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoUsuarioRepository")
 * @UniqueEntity(fields={"nombre_tipo"})
 */
class TipoUsuario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nombre_tipo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Usuario", mappedBy="id_tipo_usuario", orphanRemoval=true)
     *
     */
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTipo(): ?string
    {
        return $this->nombre_tipo;
    }

    public function setNombreTipo(string $nombre_tipo): self
    {
        $this->nombre_tipo = $nombre_tipo;

        return $this;
    }

    /**
     * @return Collection|Usuario[]
     */
    public function getUsuarios(): Collection
    {
        return $this->usuarios;
    }

    public function addUsuario(Usuario $usuario): self
    {
        if (!$this->usuarios->contains($usuario)) {
            $this->usuarios[] = $usuario;
            $usuario->setIdTipoUsuario($this);
        }

        return $this;
    }

    public function removeUsuario(Usuario $usuario): self
    {
        if ($this->usuarios->contains($usuario)) {
            $this->usuarios->removeElement($usuario);
            // set the owning side to null (unless already changed)
            if ($usuario->getIdTipoUsuario() === $this) {
                $usuario->setIdTipoUsuario(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nombre_tipo;
    }
}
