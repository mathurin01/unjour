<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/Publicites.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Publicites;

class Publicite extends AbstractFixture implements OrderedFixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $pub1 = new Publicites();
        $pub1->setNewspaper($manager->getRepository('QdUnjourBundle:Newspapers')->find(5));
        $pub1->setDcreat(new \DateTime("1914-12-24"));
        $pub1->setPath("pubs/Quinquina.jpg");
        $jj=1;
        for ($ii = 0; $ii < 2; $ii++) {
            $pub1->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if ($jj == 20) {
                $jj = 1;
            } else {
                $jj++;
            }
        }

        $pub2 = new Publicites();
        $pub2->setNewspaper($manager->getRepository('QdUnjourBundle:Newspapers')->find(12));
        $pub2->setDcreat(new \DateTime("1914-08-31"));
        $pub2->setPath("pubs/Cycle_Robert.jpg");
        $jj=1;
        for ($ii = 0; $ii < 3; $ii++) {
            $pub2->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if ($jj == 20) {
                $jj = 1;
            } else {
                $jj++;
            }
        }

        $pub3 = new Publicites();
        $pub3->setNewspaper($manager->getRepository('QdUnjourBundle:Newspapers')->find(8));
        $pub3->setDcreat(new \DateTime("1914-08-01"));
        $pub3->setPath("pubs/Riz_la_croix.jpg");
        $jj=1;
        for ($ii = 0; $ii < 2; $ii++) {
            $pub3->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if ($jj == 20) {
                $jj = 1;
            } else {
                $jj++;
            }
        }

        $pub4 = new Publicites();
        $pub4->setNewspaper($manager->getRepository('QdUnjourBundle:Newspapers')->find(2));
        $pub4->setDcreat(new \DateTime("1914-09-05"));
        $pub4->setPath("pubs/Zig_zag.jpg");
        $jj=1;
        for ($ii = 0; $ii < 4; $ii++) {
            $pub4->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if ($jj == 20) {
                $jj = 1;
            } else {
                $jj++;
            }
        }

        // On la persiste
        $manager->persist($pub1);
        $manager->persist($pub2);
        $manager->persist($pub3);
        $manager->persist($pub4);

        // On déclenche l'enregistrement
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 8;
    }
}
