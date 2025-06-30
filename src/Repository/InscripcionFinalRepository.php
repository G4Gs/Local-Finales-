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
     * Guarda una inscripción a final en la base de datos.
     */
    public function save(InscripcionFinal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Elimina una inscripción a final de la base de datos.
     */
    public function remove(InscripcionFinal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Ejemplo de método personalizado para buscar inscripciones por alumno
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
     * Ejemplo de método personalizado para buscar por fecha
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
