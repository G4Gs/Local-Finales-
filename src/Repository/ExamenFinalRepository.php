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

    public function findByFilters(?string $tecnicatura, ?string $asignatura, ?string $comision, ?string $presidente): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.tecnicatura', 't')
            ->leftJoin('e.asignatura', 'a')
            ->leftJoin('e.comision', 'c')
            ->leftJoin('e.presidente', 'p')
            ->leftJoin('p.persona', 'pp');

        if ($tecnicatura) {
            $qb->andWhere('t.id = :tecnicatura')
               ->setParameter('tecnicatura', $tecnicatura);
        }

        if ($asignatura) {
            $qb->andWhere('a.id = :asignatura')
               ->setParameter('asignatura', $asignatura);
        }

        if ($comision) {
            $qb->andWhere('c.id = :comision')
               ->setParameter('comision', $comision);
        }

        if ($presidente) {
            $qb->andWhere('LOWER(pp.nombre) LIKE :presidente')
               ->setParameter('presidente', '%' . strtolower($presidente) . '%');
        }

        if ($curso) {
        $qb->andWhere('c.id = :curso')
           ->setParameter('curso', $curso);
    }

        return $qb->getQuery()->getResult();
    }
}