<?php

namespace App\Repository;

use App\Entity\ExamenFinal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExamenFinal>
 *
 * @method ExamenFinal|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExamenFinal|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExamenFinal[]    findAll()
 * @method ExamenFinal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamenFinalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExamenFinal::class);
    }

    public function save(ExamenFinal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ExamenFinal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}

    // Ejemplo: método para buscar por fecha (opcional)
    /*
    public function findByFecha(\DateTimeInterface $fecha): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.fecha = :fecha')
            ->setParameter('fecha', $fecha)
            ->orderBy('e.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
    */

//    public function findOneBySomeField($value): ?ExamenFinal
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
