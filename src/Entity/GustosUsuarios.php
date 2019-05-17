<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GustosUsuariosRepository")
 */
class GustosUsuarios
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
    private $deportes_favoritos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $comentarios;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="gustosUsuarios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeportesFavoritos(): ?string
    {
        return $this->deportes_favoritos;
    }

    public function setDeportesFavoritos(string $deportes_favoritos): self
    {
        $this->deportes_favoritos = $deportes_favoritos;

        return $this;
    }

    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    public function setComentarios(string $comentarios): self
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getIdUsuario(): ?Usuario
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(?Usuario $id_usuario): self
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }
}
