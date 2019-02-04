<?php
/**
 * Created by PhpStorm.
 * User: nodir
 * Date: 2019-02-03
 * Time: 23:00
 */

namespace App\Repository;

use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository as BaseProductRepository;

class ProductRepository extends BaseProductRepository
{
    public function findBySearch($term)
    {
        return $this->createQueryBuilder('o')
            ->select('translation.name')
            ->addSelect('o.code')
            ->innerJoin('o.translations', 'translation', 'WITH', 'translation.locale = :locale')
            ->addOrderBy('o.updatedAt', 'DESC')
            ->andWhere('o.code LIKE :term')
            ->orWhere('translation.name LIKE :term')
            ->setParameter('locale', 'ru')
            ->setParameter('term', '%' . $term . '%')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();
    }
}