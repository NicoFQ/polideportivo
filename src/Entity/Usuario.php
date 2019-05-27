<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario implements UserInterface
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
     * @ORM\Column(type="string", length=255, unique=true)
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
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoUsuario", inversedBy="usuarios", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $tipo_usuario;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GustosUsuarios", mappedBy="id_usuario", orphanRemoval=true)
     */
    private $gustosUsuarios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Asiste", mappedBy="usuario", orphanRemoval=true)
     */
    private $asistes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reserva", mappedBy="usuario", orphanRemoval=true)
     */
    private $reservas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pago", mappedBy="usuario", orphanRemoval=true)
     */
    private $pagos;

    //Array para establecer los roles de la aplicacion (security.yaml)
    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $num_telf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\Column(type="integer")
     */
    private $n_portal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $piso;
    const ROLE_TYPES = array(   'CL' => 'ROLE_CLIENTE',
                                'PR' => 'ROLE_PROFESOR',
                                'AD' => 'ROLE_ADMIN'
                            );

    public function __construct()
    {
        $this->gustosUsuarios = new ArrayCollection();
        $this->asistes = new ArrayCollection();
        $this->reservas = new ArrayCollection();
        $this->pagos = new ArrayCollection();
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

    public function getTipoUsuario(): ?TipoUsuario
    {
        return $this->tipo_usuario;
    }

    public function setTipoUsuario(?TipoUsuario $tipo_usuario): self
    {
        $this->tipo_usuario = $tipo_usuario;

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
            $reserva->setUsuario($this);
        }

        return $this;
    }

    public function removeReserva(Reserva $reserva): self
    {
        if ($this->reservas->contains($reserva)) {
            $this->reservas->removeElement($reserva);
            // set the owning side to null (unless already changed)
            if ($reserva->getUsuario() === $this) {
                $reserva->setUsuario(null);
            }
        }

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
            $pago->setUsuario($this);
        }

        return $this;
    }

    public function removePago(Pago $pago): self
    {
        if ($this->pagos->contains($pago)) {
            $this->pagos->removeElement($pago);
            // set the owning side to null (unless already changed)
            if ($pago->getUsuario() === $this) {
                $pago->setUsuario(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return "$this->nombre";
    }

    //METODOS DE LOGIN

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
//    public function getRoles()
//    {
//        return ['ROLE_USER'];
//    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        // $roles[] = 'ROLE_USER';
        $roles []= Usuario::ROLE_TYPES['CL'];
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return (string) $this->contrasena;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return (string) $this->nombre_usuario;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
//        return "";
    }

    public function getNumTelf(): ?int
    {
        return $this->num_telf;
    }

    public function setNumTelf(?int $num_telf): self
    {
        $this->num_telf = $num_telf;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getNPortal(): ?int
    {
        return $this->n_portal;
    }

    public function setNPortal(int $n_portal): self
    {
        $this->n_portal = $n_portal;

        return $this;
    }

    public function getPiso(): ?string
    {
        return $this->piso;
    }

    public function setPiso(string $piso): self
    {
        $this->piso = $piso;

        return $this;
    }
}
