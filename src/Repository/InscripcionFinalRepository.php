<?php

namespace App\Repository;

use App\Entity\InscripcionFinal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InscripcionFinal>
 *
 * @method InscripcionFinal|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscripcionFinal|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscripcionFinal[]    findAll()
 * @method InscripcionFinal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscripcionFinalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscripcionFinal::class);
    }

    /**
     * Guarda una inscripción final.
     * 
     * @param InscripcionFinal $entity
     * @param bool $flush
     * @return void
     */
    public function save(InscripcionFinal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Elimina una inscripción final.
     * 
     * @param InscripcionFinal $entity
     * @param bool $flush
     * @return void
     */
    public function remove(InscripcionFinal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Buscar inscripciones finales por alumno.
     *
     * @param int $alumnoId
     * @return InscripcionFinal[]
     */
    public function findByAlumnoId(int $alumnoId): array
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.alumno = :alumnoId')
            ->setParameter('alumnoId', $alumnoId)
            ->orderBy('i.fecha', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Buscar inscripciones finales por fecha.
     *
     * @param \DateTimeInterface $fecha
     * @return InscripcionFinal[]
     */
    public function findByFecha(\DateTimeInterface $fecha): array
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.fecha = :fecha')
            ->setParameter('fecha', $fecha->format('Y-m-d'))
            ->orderBy('i.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
