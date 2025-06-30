<?php

namespace App\Entity;

use App\Repository\InscripcionFinalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscripcionFinalRepository::class)]
class InscripcionFinal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(inversedBy: 'inscripcionFinals')]
    private ?Alumno $alumno_id = null;

    #[ORM\ManyToOne(inversedBy: 'inscripcionFinals')]
    private ?ExamenFinal $examen_final = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $tipo = null;

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

    public function getAlumnoId(): ?Alumno
    {
        return $this->alumno_id;
    }

    public function setAlumnoId(?Alumno $alumno_id): static
    {
        $this->alumno_id = $alumno_id;
        return $this;
    }

    public function getExamenFinal(): ?ExamenFinal
    {
        return $this->examen_final;
    }

    public function setExamenFinal(?ExamenFinal $examen_final): static
    {
        $this->examen_final = $examen_final;
        return $this;
    }

    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(?int $tipo): static
    {
        $this->tipo = $tipo;
        return $this;
    }
}
