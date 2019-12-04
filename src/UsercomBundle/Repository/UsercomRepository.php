<?php


namespace UsercomBundle\Repository;


use Doctrine\ORM\EntityRepository;

class UsercomRepository extends EntityRepository
{
    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM BddBundle:Evenement p
                WHERE p.nom LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }

}