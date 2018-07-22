<?php

namespace App\Repository;

use App\Entity\PageName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PageName|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageName|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageName[]    findAll()
 * @method PageName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageNameRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PageName::class);
    }

//    /**
//     * @return PageName[] Returns an array of PageName objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PageName
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
