<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NoticiaRepository")
 */
class Noticia
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
    private $titulo;

    /**
     * @ORM\Column(type="string", length=5000)
     */
    private $contenido;

    /**
     * @ORM\Column(type="string", length=5000, nullable=true)
     */
    private $img_noticia;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha_creacion;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha_modificacion;

    /**
     * @ORM\Column(type="string", length=5000, nullable=true)
     */
    private $autor;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getContenido(): ?string
    {
        return $this->contenido;
    }

    public function setContenido(string $contenido): self
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function getImgNoticia(): ?string
    {
        return $this->img_noticia;
    }

    public function setImgNoticia(?string $img_noticia): self
    {
        $this->img_noticia = $img_noticia;

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

    public function getFechaModificacion(): ?\DateTimeInterface
    {
        return $this->fecha_modificacion;
    }

    public function setFechaModificacion(\DateTimeInterface $fecha_modificacion): self
    {
        $this->fecha_modificacion = $fecha_modificacion;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}
