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
    private ?Alumno $alumno = null;

    #[ORM\ManyToOne(inversedBy: 'inscripcionFinals')]
    private ?Asignatura $asignatura = null;

    #[ORM\ManyToOne(targetEntity: \App\Entity\Curso::class)]
    private ?Curso $curso = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): staÑtic
    {
        $this->fecha = $fecha;

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

    public function getAsignatura(): ?Asignatura
    {
        return $this->asignatura;
    }

    public function setAsignaturaId(?Asignatura $asignatura): static
    {
        $this->asignatura_ = $asignatura;

        return $this;
    }
    public function getCurso(): ?Curso
     {
    return $this->curso;
    }

    public function setCurso(?Curso $curso): static
   {
    $this->curso = $curso;
    return $this;
   }

}
