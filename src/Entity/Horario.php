<?php

namespace App\Entity;

use App\Repository\HorarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HorarioRepository::class)]
class Horario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $dia = null;

    #[ORM\Column(length: 40)]
    private ?string $horarioInicio = null;

    #[ORM\Column(length: 40)]
    private ?string $horarioFin = null;

    #[ORM\Column(length: 255)]
    private ?string $cantModulos = null;

    #[ORM\ManyToOne(inversedBy: 'horarios')]
    private ?Curso $curso = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDia(): ?string
    {
        return $this->dia;
    }

    public function setDia(string $dia): static
    {
        $this->dia = $dia;

        return $this;
    }

    public function getHorarioInicio(): ?string
    {
        return $this->horarioInicio;
    }

    public function setHorarioInicio(string $horarioInicio): static
    {
        $this->horarioInicio = $horarioInicio;

        return $this;
    }

    public function getHorarioFin(): ?string
    {
        return $this->horarioFin;
    }

    public function setHorarioFin(string $horarioFin): static
    {
        $this->horarioFin = $horarioFin;

        return $this;
    }

    public function getCantModulos(): ?string
    {
        return $this->cantModulos;
    }

    public function setCantModulos(string $cantModulos): static
    {
        $this->cantModulos = $cantModulos;

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
