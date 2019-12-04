<?php


namespace BddBundle\Repository;


use BddBundle\Entity\Participation;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

class EvenementRepository extends EntityRepository
{


    public function findEvenementByid($id)
    {
        try {
            return $this->getEntityManager()
                ->createQuery(
                    "SELECT p
                FROM BddBundle:Evenement
                p WHERE p.id =:id"
                )
                ->setParameter('id', $id)
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
        }
    }



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

    public function checkParticipation($idUser,$idEvenement) {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT COUNT(p)
                FROM BddBundle:Participation p
                WHERE p.iduser = :user and p.idevenement = :evenement'
            )
            ->setParameter('user',$idUser)
            ->setParameter('evenement',$idEvenement)
            ->getSingleScalarResult();
    }


    public function top5(){
        $query=$this->getEntityManager()
            ->createQuery("select c from BddBundle:Evenement c ORDER BY c.nbrParticipants DESC ");
        return $query->getResult();
    }

}