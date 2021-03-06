<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * OpendataRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OpendataRepository extends EntityRepository
{
    /*
     * TODO
     *
     * afficher les photos Opendata :
     *      - par date
     *      - par tag
     *      - par Pays/Départements/Communes/Auteurs/Artistes/Series
     * mettre en place un système de navigation si le nb de données est élevé.
     */

    public function myFindByAll()
    {
        $queryBuilder = $this->_em->createQueryBuilder()
            ->select(
                'o.pays',
                'o.reg',
                'o.edif',
                'o.leg',
                'o.obj',
                'o.lieucor',
                'o.autoeu',
                'o.dpt',
                'o.autp',
                'o.serie'
            )
            ->from($this->_entityName, 'o');

        $query = $queryBuilder->getQuery()->setMaxResults(200);
        return $query->getResult();
    }
}
