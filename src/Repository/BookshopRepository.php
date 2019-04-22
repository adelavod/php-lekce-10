<?php

namespace App\Repository;

use App\Entity\Bookshop;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Bookshop|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bookshop|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bookshop[]    findAll()
 * @method Bookshop[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookshopRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Bookshop::class);
    }

    // /**
    //  * @return Bookshop[] Returns an array of Bookshop objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bookshop
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
