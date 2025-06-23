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

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    #[ORM\JoinColumn(nullable: false)]
<<<<<<< HEAD
    private ?Docente $presidenteId = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Docente $vocal1Id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Docente $vocal2Id = null;

    #[ORM\ManyToOne(inversedBy: 'examenFinals')]
    private ?Asignatura $asignaturaId = null;

    #[ORM\OneToMany(mappedBy: 'examenFinalId', targetEntity: ExamenAlumno::class)]
    private Collection $examenAlumnos;
=======
    private ?Docente $presidente = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    private ?Docente $vocal1 = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    private ?Docente $vocal2 = null;

    #[ORM\Column(length: 10)]
    private ?string $estadoMesa = null; 

    #[ORM\ManyToOne(targetEntity: Tecnicatura::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tecnicatura $tecnicatura = null;
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

    #[ORM\ManyToOne(targetEntity: Asignatura::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Asignatura $asignatura = null;

    public function getId(): ?int { return $this->id; }
    public function getFecha(): ?\DateTimeInterface { return $this->fecha; }
    public function setFecha(\DateTimeInterface $fecha): static { $this->fecha = $fecha; return $this; }

    public function getPresidente(): ?Docente { return $this->presidente; }
    public function setPresidente(?Docente $presidente): static { $this->presidente = $presidente; return $this; }

<<<<<<< HEAD
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
=======
    public function getVocal1(): ?Docente { return $this->vocal1; }
    public function setVocal1(?Docente $vocal1): static { $this->vocal1 = $vocal1; return $this; }

    public function getVocal2(): ?Docente { return $this->vocal2; }
    public function setVocal2(?Docente $vocal2): static { $this->vocal2 = $vocal2; return $this; }

    public function getEstadoMesa(): ?string { return $this->estadoMesa; }
    public function setEstadoMesa(string $estadoMesa): static { $this->estadoMesa = $estadoMesa; return $this; }

    public function getTecnicatura(): ?Tecnicatura { return $this->tecnicatura; }
    public function setTecnicatura(?Tecnicatura $tecnicatura): static { $this->tecnicatura = $tecnicatura; return $this; }

    public function getAsignatura(): ?Asignatura { return $this->asignatura; }
    public function setAsignatura(?Asignatura $asignatura): static { $this->asignatura = $asignatura; return $this; }
}
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
