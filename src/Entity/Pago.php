<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagoRepository")
 */
class Pago
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
    private $concepto;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_pago;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $token_pago;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="pagos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPago", inversedBy="pagos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pago;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoBono", inversedBy="pagos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tipo_bono;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(string $concepto): self
    {
        $this->concepto = $concepto;

        return $this;
    }

    public function getFechaPago(): ?\DateTimeInterface
    {
        return $this->fecha_pago;
    }

    public function setFechaPago(\DateTimeInterface $fecha_pago): self
    {
        $this->fecha_pago = $fecha_pago;

        return $this;
    }

    public function getTokenPago(): ?string
    {
        return $this->token_pago;
    }

    public function setTokenPago(?string $token_pago): self
    {
        $this->token_pago = $token_pago;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getPago(): ?TipoPago
    {
        return $this->pago;
    }

    public function setPago(?TipoPago $pago): self
    {
        $this->pago = $pago;

        return $this;
    }

    public function getTipoBono(): ?TipoBono
    {
        return $this->tipo_bono;
    }

    public function setTipoBono(?TipoBono $tipo_bono): self
    {
        $this->tipo_bono = $tipo_bono;

        return $this;
    }
}
