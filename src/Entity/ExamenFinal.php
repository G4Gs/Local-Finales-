<?php

namespace App\Entity;

use App\Repository\ExamenFinalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExamenFinalRepository::class)]
class ExamenFinal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Docente $presidente = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    private ?Docente $vocal1 = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    private ?Docente $vocal2 = null;

    #[ORM\Column(length: 10)]
    private ?string $estadoMesa = null;

    #[ORM\Column(type: 'time', nullable: true)]
    private ?\DateTimeInterface $hora = null;

    // Relación con Tecnicatura (si tu tabla examen_final tiene tecnicatura_id)
    #[ORM\ManyToOne(targetEntity: Tecnicatura::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tecnicatura $tecnicatura = null;

    #[ORM\ManyToOne(targetEntity: Asignatura::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Asignatura $asignatura = null;

    #[ORM\ManyToOne(targetEntity: Comision::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comision $comision = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getPresidente(): ?Docente
    {
        return $this->presidente;
    }

    public function setPresidente(?Docente $presidente): static
    {
        $this->presidente = $presidente;
        return $this;
    }

    public function getVocal1(): ?Docente
    {
        return $this->vocal1;
    }

    public function setVocal1(?Docente $vocal1): static
    {
        $this->vocal1 = $vocal1;
        return $this;
    }

    public function getVocal2(): ?Docente
    {
        return $this->vocal2;
    }

    public function setVocal2(?Docente $vocal2): static
    {
        $this->vocal2 = $vocal2;
        return $this;
    }

    public function getEstadoMesa(): ?string
    {
        return $this->estadoMesa;
    }

    public function setEstadoMesa(string $estadoMesa): static
    {
        $this->estadoMesa = $estadoMesa;
        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(?\DateTimeInterface $hora): static
    {
        $this->hora = $hora;
        return $this;
    }

    public function getTecnicatura(): ?Tecnicatura
    {
        return $this->tecnicatura;
    }

    public function setTecnicatura(?Tecnicatura $tecnicatura): static
    {
        $this->tecnicatura = $tecnicatura;
        return $this;
    }

    public function getAsignatura(): ?Asignatura
    {
        return $this->asignatura;
    }

    public function setAsignatura(?Asignatura $asignatura): static
    {
        $this->asignatura = $asignatura;
        return $this;
    }

    public function getComision(): ?Comision
    {
        return $this->comision;
    }

    public function setComision(?Comision $comision): static
    {
        $this->comision = $comision;
        return $this;
    }
}