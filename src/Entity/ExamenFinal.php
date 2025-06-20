<?php

namespace App\Entity;

use App\Repository\ExamenFinalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExamenFinalRepository::class)]
class ExamenFinal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Docente $presidenteId = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Docente $vocal1Id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Docente $vocal2Id = null;

    #[ORM\ManyToOne(inversedBy: 'examenFinals')]
    private ?Asignatura $asignaturaId = null;

    #[ORM\OneToMany(mappedBy: 'examenFinalId', targetEntity: ExamenAlumno::class)]
    private Collection $examenAlumnos;

    public function __construct()
    {
        $this->examenAlumnos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getPresidenteId(): ?Docente
    {
        return $this->presidenteId;
    }

    public function setPresidenteId(Docente $presidenteId): self
    {
        $this->presidenteId = $presidenteId;
        return $this;
    }

    public function getVocal1Id(): ?Docente
    {
        return $this->vocal1Id;
    }

    public function setVocal1Id(?Docente $vocal1Id): self
    {
        $this->vocal1Id = $vocal1Id;
        return $this;
    }

    public function getVocal2Id(): ?Docente
    {
        return $this->vocal2Id;
    }

    public function setVocal2Id(?Docente $vocal2Id): self
    {
        $this->vocal2Id = $vocal2Id;
        return $this;
    }

    public function getAsignaturaId(): ?Asign
