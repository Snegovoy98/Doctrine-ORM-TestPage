<?php

namespace App\Repository;

use App\Entity\Album;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Album|null find($id, $lockMode = null, $lockVersion = null)
 * @method Album|null findOneBy(array $criteria, array $orderBy = null)
 * @method Album[]    findAll()
 * @method Album[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlbumRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Album::class);
    }


    /**
     * @return string
     */
    public function getAllText(): string
    {
        return $this->createQueryBuilder('a')
            ->select(
                'a.title,
                        a.about_content,
                        a.additional_info,
                        a.show_additional_info,
                        a.updated_at')
            ->from(Album::class, 'a');

    }
}
