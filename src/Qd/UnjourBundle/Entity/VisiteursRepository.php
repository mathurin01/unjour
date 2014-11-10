<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * VisiteursRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VisiteursRepository extends EntityRepository
{

    /*
     * liens :
     * http://stackoverflow.com/questions/5133580/which-mysql-datatype-for-an-ip-address
     * http://blog.chatwee.com/2014/02/storing-ip-address-in-mysql-database/
     * http://stackoverflow.com/questions/3488536/mysql-create-time-and-update-time-timestamp
     * http://gusiev.com/2009/04/update-and-create-timestamps-with-mysql/
     *
     *
     * scripts effectués :
     * dump de la bdb
     *
     * creation d'une bdd test :
     *
     * copie de la bbd dabs test
     *
     * puis, dans myqsl
     * use copies bdd;
     * modif du champ date
     * alter table connectes change date firstcon datetime not null
     * ajout de colonne
     * alter table connectes add column lastcon datetime not null default '0000-00-00 00:00:00'
     * alter table connectes add column nb int(4) not null default 1
     *
     * requête donnant :
     *      - nb de visites,
     *      - nb de visiteurs,
     *      - nb de visite aujourd'hui,
     *      - nb de visite cette semaine
     *      - nb de visite ce mois
     *
     * SELECT

sum(nb)as nb_visites,
count(id) as nb_visiteurs,
(select sum(nb) from `connectes` where date(`firstcon`)=date(now())) as visite_today,
(select sum(nb) from `connectes` where date(`firstcon`)>=date(now() - interval 7 day)) as visite_week,
(select sum(nb) from `connectes` where date(`firstcon`)>=date(now() - interval 30 day)) as visite_month

FROM `connectes`
     */
}
