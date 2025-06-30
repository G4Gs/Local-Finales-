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

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Docente $presidente = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    private ?Docente $vocal1 = null;

    #[ORM\ManyToOne(targetEntity: Docente::class)]
    private ?Docente $vocal2 = null;

    #[ORM\ManyToOne(inversedBy: 'examenFinales')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Curso $curso = null;

    #[ORM\Column(name: "estado_mesa", type: "string", length: 255, nullable: true)]
    private ?string $modalidadMesa = null;

    #[ORM\OneToMany(mappedBy: 'examen_final', targetEntity: InscripcionFinal::class)]
    private Collection $inscripcionFinals;


    public function getId(): ?int { return $this->id; }
    public function getFecha(): ?\DateTimeInterface { return $this->fecha; }
    public function setFecha(\DateTimeInterface $fecha): static { $this->fecha = $fecha; return $this; }

    public function getPresidente(): ?Docente { return $this->presidente; }
    public function setPresidente(?Docente $presidente): static { $this->presidente = $presidente; return $this; }

    public function getVocal1(): ?Docente
    {
        return $this->vocal1;
    }

    public function setVocal1(?Docente $vocal1): static
    {
        $this->vocal1 = $vocal1;
        return $this;
    }

    public function getVocal2(): ?Docente { return $this->vocal2; }
    public function setVocal2(?Docente $vocal2): static { $this->vocal2 = $vocal2; return $this; }


   
   public function getCurso(): ?Curso
   {
      return $this->curso;
   }

   public function setCurso(?Curso $curso): static
    {
      $this->curso = $curso;
      return $this;
    }

    public function getPresidenteId(): ?Docente
    {
        return $this->presidente;
    }

    public function setPresidenteId(Docente $presidente): static
    {
        $this->presidente = $presidente;
        return $this;
    }

    public function getVocal1Id(): ?Docente
    {
        return $this->Vocal1_id;
    }

    public function setVocal1Id(?Docente $Vocal1_id): static
    {
        $this->Vocal1_id = $Vocal1_id;
        return $this;
    }

    public function getVocal2Id(): ?Docente
    {
        return $this->Vocal2_id;
    }

    public function setVocal2Id(?Docente $Vocal2_id): static
    {
        $this->Vocal2_id = $Vocal2_id;
        return $this;
    }

    /**
     * @return Collection<int, ExamenAlumno>
     */
    public function getExamenAlumnos(): Collection
    {
        return $this->examenAlumnos;
    }

    public function addExamenAlumno(ExamenAlumno $examenAlumno): static
    {
        if (!$this->examenAlumnos->contains($examenAlumno)) {
            $this->examenAlumnos->add($examenAlumno);
            $examenAlumno->setExamenFinalId($this);
        }

        return $this;
    }

    public function removeExamenAlumno(ExamenAlumno $examenAlumno): static
    {
        if ($this->examenAlumnos->removeElement($examenAlumno)) {
            if ($examenAlumno->getExamenFinalId() === $this) {
                $examenAlumno->setExamenFinalId(null);
            }
        }

        return $this;
    }

 

    public function getModalidadMesa(): ?string
    {
        return $this->modalidadMesa;
    }

    public function setModalidadMesa(?string $modalidadMesa): static
    {
        $this->modalidadMesa = $modalidadMesa;
        return $this;
    }

    /**
     * @return Collection<int, InscripcionFinal>
     */
    public function getInscripcionFinals(): Collection
    {
        return $this->inscripcionFinals;
    }

    public function addInscripcionFinal(InscripcionFinal $inscripcionFinal): static
    {
        if (!$this->inscripcionFinals->contains($inscripcionFinal)) {
            $this->inscripcionFinals->add($inscripcionFinal);
            $inscripcionFinal->setExamenFinal($this);
        }

        return $this;
    }

    public function removeInscripcionFinal(InscripcionFinal $inscripcionFinal): static
    {
        if ($this->inscripcionFinals->removeElement($inscripcionFinal)) {
            // set the owning side to null (unless already changed)
            if ($inscripcionFinal->getExamenFinal() === $this) {
                $inscripcionFinal->setExamenFinal(null);
            }
        }

        return $this;
    }
 public function __toString(): string
 {
    $curso = $this->getCurso();
    $asignatura = $curso?->getAsignatura();
    $tecnicatura = $asignatura?->getTecnicatura();

    $asignaturaNombre = $asignatura?->getNombre() ?? 'Sin asignatura';
    $tecnicaturaNombre = $tecnicatura?->getNombre() ?? 'Sin tecnicatura';
    $modalidad = $this->modalidad_mesa ?? 'Sin modalidad';
    $fechaStr = $this->fecha ? $this->fecha->format('Y-m-d') : 'Sin fecha';

    return sprintf('%s (%s) - %s - %s', $asignaturaNombre, $tecnicaturaNombre, $modalidad, $fechaStr);
 }

    
}
