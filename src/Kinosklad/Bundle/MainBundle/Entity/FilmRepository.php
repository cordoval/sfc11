<?php

namespace Kinosklad\Bundle\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FilmRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FilmRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findAllQB()
            ->getQuery()
            ->execute();
    }

    public function find($id)
    {
        return $this->findAllQB()
            ->where('f.id = ?1')
            ->setParameter(1, $id)
            ->getQuery()
            ->getSingleResult();
    }

    public function findAllQB()
    {
        return $this->createQueryBuilder('f')
            ->select('f, g, ft, gt')
            ->join('f.genres', 'g')
            ->join('f.translations', 'ft')
            ->join('g.translations', 'gt');
    }
}
