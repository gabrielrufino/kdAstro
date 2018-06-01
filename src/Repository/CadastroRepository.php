<?php

namespace App\Repository;

use App\Entity\Cadastro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cadastro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cadastro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cadastro[]    findAll()
 * @method Cadastro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CadastroRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cadastro::class);
    }

//    /**
//     * @return Cadastro[] Returns an array of Cadastro objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cadastro
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
