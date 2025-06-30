<?php

namespace App\Entity;

use App\Repository\InscripcionFinalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscripcionFinalRepository::class)]
class InscripcionFinal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Alumno::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Alumno $alumno = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(targetEntity: Asignatura::class)]
    #[ORM\JoinColumn(name: "asignatura_id", referencedColumnName: "id", nullable: true)]
    private ?Asignatura $asignatura = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAlumno(): ?Alumno
    {
        return $this->alumno;
    }

    public function setAlumno(?Alumno $alumno): static
    {
        $this->alumno = $alumno;
        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;
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

    public function __toString(): string
    {
        return $this->alumno?->getNombre() . ' - ' . $this->asignatura?->getNombre();
    }
}
