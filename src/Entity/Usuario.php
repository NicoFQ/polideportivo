<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_usuario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contrasena;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_documento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apellido_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $apellido_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagen_perfil;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sexo;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_alta;

    /**
     * @ORM\Column(type="integer")
     */
    private $usuario_activo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoUsuario", inversedBy="usuarios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_tipo_usuario;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GustosUsuarios", mappedBy="id_usuario", orphanRemoval=true)
     */
    private $gustosUsuarios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Asiste", mappedBy="usuario", orphanRemoval=true)
     */
    private $asistes;

    public function __construct()
    {
        $this->gustosUsuarios = new ArrayCollection();
        $this->asistes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNombreUsuario(): ?string
    {
        return $this->nombre_usuario;
    }

    public function setNombreUsuario(string $nombre_usuario): self
    {
        $this->nombre_usuario = $nombre_usuario;

        return $this;
    }

    public function getContrasena(): ?string
    {
        return $this->contrasena;
    }

    public function setContrasena(string $contrasena): self
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    public function getNumDocumento(): ?string
    {
        return $this->num_documento;
    }

    public function setNumDocumento(string $num_documento): self
    {
        $this->num_documento = $num_documento;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido1(): ?string
    {
        return $this->apellido_1;
    }

    public function setApellido1(string $apellido_1): self
    {
        $this->apellido_1 = $apellido_1;

        return $this;
    }

    public function getApellido2(): ?string
    {
        return $this->apellido_2;
    }

    public function setApellido2(?string $apellido_2): self
    {
        $this->apellido_2 = $apellido_2;

        return $this;
    }

    public function getImagenPerfil(): ?string
    {
        return $this->imagen_perfil;
    }

    public function setImagenPerfil(?string $imagen_perfil): self
    {
        $this->imagen_perfil = $imagen_perfil;

        return $this;
    }

    public function getSexo(): ?int
    {
        return $this->sexo;
    }

    public function setSexo(?int $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getFechaAlta(): ?\DateTimeInterface
    {
        return $this->fecha_alta;
    }

    public function setFechaAlta(\DateTimeInterface $fecha_alta): self
    {
        $this->fecha_alta = $fecha_alta;

        return $this;
    }

    public function getUsuarioActivo(): ?int
    {
        return $this->usuario_activo;
    }

    public function setUsuarioActivo(int $usuario_activo): self
    {
        $this->usuario_activo = $usuario_activo;

        return $this;
    }

    public function getIdTipoUsuario(): ?TipoUsuario
    {
        return $this->id_tipo_usuario;
    }

    public function setIdTipoUsuario(?TipoUsuario $id_tipo_usuario): self
    {
        $this->id_tipo_usuario = $id_tipo_usuario;

        return $this;
    }

    /**
     * @return Collection|GustosUsuarios[]
     */
    public function getGustosUsuarios(): Collection
    {
        return $this->gustosUsuarios;
    }

    public function addGustosUsuario(GustosUsuarios $gustosUsuario): self
    {
        if (!$this->gustosUsuarios->contains($gustosUsuario)) {
            $this->gustosUsuarios[] = $gustosUsuario;
            $gustosUsuario->setIdUsuario($this);
        }

        return $this;
    }

    public function removeGustosUsuario(GustosUsuarios $gustosUsuario): self
    {
        if ($this->gustosUsuarios->contains($gustosUsuario)) {
            $this->gustosUsuarios->removeElement($gustosUsuario);
            // set the owning side to null (unless already changed)
            if ($gustosUsuario->getIdUsuario() === $this) {
                $gustosUsuario->setIdUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Asiste[]
     */
    public function getAsistes(): Collection
    {
        return $this->asistes;
    }

    public function addAsiste(Asiste $asiste): self
    {
        if (!$this->asistes->contains($asiste)) {
            $this->asistes[] = $asiste;
            $asiste->setUsuario($this);
        }

        return $this;
    }

    public function removeAsiste(Asiste $asiste): self
    {
        if ($this->asistes->contains($asiste)) {
            $this->asistes->removeElement($asiste);
            // set the owning side to null (unless already changed)
            if ($asiste->getUsuario() === $this) {
                $asiste->setUsuario(null);
            }
        }

        return $this;
    }
}
