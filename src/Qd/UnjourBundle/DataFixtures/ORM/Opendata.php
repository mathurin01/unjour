<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/OpenData.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\OpenData;

class OpenDatas extends AbstractFixture implements OrderedFixtureInterface
{
     // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        /*
         *
         *  1 /Importation de la base
         * LOAD DATA INFILE 'c:/xampp/htdocs/unjour/web/bundles/open-data.gouv.txt' INTO TABLE opendata FIELDS terminated BY '\t'
LINES terminated BY '\n' (ref, nump,  pays,  reg,  dpt,  com,  insee,  edif,  adresse,  leg,  obj,  lieucor,  autp,  autoeu,  scle,  datepv,  serie,  typdoc,  lbase, copy,   videov,  videop)

        2/ Correction des dates contenant des points "."
        UPDATE `opendata` SET `datepv`= REPLACE (`datepv`,'.','-') WHERE `datepv` LIKE '%.%'

        3/ Insertion du champs 'dataqd' au format date pour les lignes ayant 10 caractères (9498 lignes)
        UPDATE `opendata` o INNER JOIN `opendata` oo on o.id = oo.id SET o.`dateqd` = DATE(oo.`datepv`) WHERE length(oo.`datepv`) = 10

        controlez :
        SELECT `datepv`,`dateqd` FROM `opendata` WHERE length(`datepv`)=10
         */
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 7;
    }
}
