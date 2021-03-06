<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ChronosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChronosRepository extends EntityRepository
{
    /*
     * TODO
     *
     * 1 afficher la liste des chronos :
     *      - par date
     *      - par tags
     *      - si il y a une endTime, c'est "événement"
     *      - sinon, c'est un "fait du jour"
     * 2 la pres d'une Chrono s'affiche en side
     * 3 si il y une descr, une(s) photos, un bilan (facultatif), possibilité d'afficher une page "détails"
     *      - s'il y a un actor, le mettre en side de la page détails
     * 4 le descr s'affiche dans la page détail
     */

    public function myFindByFacts($nbParPage, $page)
    {
        if ($page < 1) {
            throw new \InvalidArgumentException(
                'L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").'
            );
        }

        $queryBuilder = $this->_em->createQueryBuilder()
            ->select('c')
            ->from($this->_entityName, 'c')
            ->where('c.endTime = 0000-00-00')
            ->orderBy('c.startTime', 'ASC');
        $query = $queryBuilder->getQuery();
        $query->setFirstResult(($page-1) * $nbParPage)->setMaxResults($nbParPage);
        return new paginator($query);
    }

    public function myFindByEvents($nbParPage, $page)
    {
        if ($page < 1) {
            throw new \InvalidArgumentException(
                'L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").'
            );
        }

        $queryBuilder = $this->_em->createQueryBuilder()
            ->select('c')
            ->from($this->_entityName, 'c')
            ->where('c.endTime != 0000-00-00')
            ->orderBy('c.endTime', 'ASC');
        $query = $queryBuilder->getQuery();
        $query->setFirstResult(($page-1) * $nbParPage)->setMaxResults($nbParPage);
        return new paginator($query);
    }

    public function myFindByChrono($madate)
    {
        $query = $this->_em->createQuery(
            'SELECT c FROM QdBlogBundle:Chrono c where ?1 = c.datedebut and c.datefin = 0000-00-00 order by c.datedebut'
        );
        $query->setParameter(1, $madate);
        return $query->getResult();
    }
    public function myFindByEventsss($madate)
    {
        $query = $this->_em->createQuery(
            'SELECT c FROM QdBlogBundle:Chrono c where ?1 between c.datedebut and c.datefin order by c.datedebut'
        );
        $query->setParameter(1, $madate);
        return $query->getResult();
    }

    public function myFindByTags($id)
    {
        $query = $this->createQueryBuilder('c')
            ->join('c.tags', 't')
            ->addSelect('t')
            ->where('t.id = :id')
            ->setParameter("id", $id);

        $query = $query->getQuery();

        return $query->getResult();
    }
}
