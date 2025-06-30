<?php

namespace App\Entity;

use App\Repository\InscripcionFinalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Alumno;

#[ORM\Entity(repositoryClass: InscripcionFinalRepository::class)]
class InscripcionFinal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    // Eliminamos la columna tipo o la convertimos en propiedad no persistente
    private ?int $tipo = null; // propiedad sin mapeo a columna de base de datos

    #[ORM\ManyToOne(targetEntity: Alumno::class)]
    #[ORM\JoinColumn(name: "alumno_id", referencedColumnName: "id", nullable: false)]
    private ?Alumno $alumno = null;

    // Campo no persistente (por si lo usás para mostrar algo sin almacenarlo)
    public string $examenFinalNombre = '';

    // Getters y Setters

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

    // El tipo es solo una propiedad interna, no se guarda en la base de datos
    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(?int $tipo): static
    {
        $this->tipo = $tipo;
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
}
