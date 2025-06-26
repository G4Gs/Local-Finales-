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

    /**
     * Busca ExamenFinal filtrando por curso y presidente.
     * 
     * @param string|null $curso Texto para buscar en tecnicatura, asignatura o comisión.
     * @param string|null $presidente Texto para buscar en nombre del presidente.
     * @return ExamenFinal[]
     */
    public function findByFilters(?string $curso, ?string $presidente): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.curso', 'c')
            ->leftJoin('c.comision', 'com')
            ->leftJoin('com.tecnicatura', 't')
            ->leftJoin('c.asignatura', 'a')
            ->leftJoin('e.presidente', 'p')
            ->leftJoin('p.persona', 'pp');

        if ($curso) {
            $qb->andWhere(
                $qb->expr()->orX(
                    'LOWER(t.nombre) LIKE :curso',
                    'LOWER(a.nombre) LIKE :curso',
                    'LOWER(com.comision) LIKE :curso'
                )
            )
            ->setParameter('curso', '%' . strtolower($curso) . '%');
        }

        if ($presidente) {
            $qb->andWhere('LOWER(pp.nombre) LIKE :presidente')
               ->setParameter('presidente', '%' . strtolower($presidente) . '%');
        }

        return $qb->getQuery()->getResult();
    }
}
