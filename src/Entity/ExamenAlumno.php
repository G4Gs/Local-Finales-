<?php

namespace App\Entity;

use App\Repository\ExamenAlumnoRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Alumno;
use App\Entity\ExamenFinal;

#[ORM\Entity(repositoryClass: ExamenAlumnoRepository::class)]
class ExamenAlumno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $nota = null;

    #[ORM\Column(length: 15)]
    private ?string $tomo = null;

    #[ORM\Column]
    private ?int $folio = null;

    #[ORM\ManyToOne(targetEntity: Alumno::class, inversedBy: 'examenAlumnos')]
    #[ORM\JoinColumn(name: "alumno_id", referencedColumnName: "id", nullable: false)]
    private ?Alumno $alumno = null;

    #[ORM\ManyToOne(targetEntity: ExamenFinal::class, inversedBy: 'examenAlumnos')]
    #[ORM\JoinColumn(name: "examen_final_id", referencedColumnName: "id", nullable: false)]
    private ?ExamenFinal $examenFinal = null;

    // Getters y Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNota(): ?string
    {
        return $this->nota;
    }

    public function setNota(string $nota): static
    {
        $this->nota = $nota;
        return $this;
    }

    public function getTomo(): ?string
    {
        return $this->tomo;
    }

    public function setTomo(string $tomo): static
    {
        $this->tomo = $tomo;
        return $this;
    }

    public function getFolio(): ?int
    {
        return $this->folio;
    }

    public function setFolio(int $folio): static
    {
        $this->folio = $folio;
        return $this;
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

    public function getExamenFinal(): ?ExamenFinal
    {
        return $this->examenFinal;
    }

    public function setExamenFinal(?ExamenFinal $examenFinal): static
    {
        $this->examenFinal = $examenFinal;
        return $this;
    }
}
