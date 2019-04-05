<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClaseRepository")
 */
class Clase
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
    private $nombre_clase;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dias_semana;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hora_inicio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hora_fin;

    /**
     * @ORM\Column(type="integer")
     */
    private $max_alumnos;

    /**
     * @ORM\Column(type="integer")
     */
    private $min_alumnos;

    /**
     * @ORM\Column(type="integer")
     */
    private $disponible;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Deporte", inversedBy="clases")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_deporte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreClase(): ?string
    {
        return $this->nombre_clase;
    }

    public function setNombreClase(string $nombre_clase): self
    {
        $this->nombre_clase = $nombre_clase;

        return $this;
    }

    public function getDiasSemana(): ?string
    {
        return $this->dias_semana;
    }

    public function setDiasSemana(string $dias_semana): self
    {
        $this->dias_semana = $dias_semana;

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

    public function getMaxAlumnos(): ?int
    {
        return $this->max_alumnos;
    }

    public function setMaxAlumnos(int $max_alumnos): self
    {
        $this->max_alumnos = $max_alumnos;

        return $this;
    }

    public function getMinAlumnos(): ?int
    {
        return $this->min_alumnos;
    }

    public function setMinAlumnos(int $min_alumnos): self
    {
        $this->min_alumnos = $min_alumnos;

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

    public function getIdDeporte(): ?Deporte
    {
        return $this->id_deporte;
    }

    public function setIdDeporte(?Deporte $id_deporte): self
    {
        $this->id_deporte = $id_deporte;

        return $this;
    }
}
