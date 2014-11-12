<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/Photos.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Photos;

class Photo implements FixtureInterface
{
// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $photo1 = new Photos();
        $photo1->setLegende("Carte de l'Allemagne");
        $photo1->setPath("photos/2014-10-08_090932.jpg");
        $photo1->setSource("indefini");
        $photo1->setLienUrl("indefini");

        $photo2 = new Photos();
        $photo2->setLegende("Photo de Jules-André Peugeot");
        $photo2->setPath("photos/A_photo_of_Jules_Andre_Peugeot.jpg");
        $photo2->setSource("indefini");
        $photo2->setLienUrl("indefini");

        $photo3 = new Photos();
        $photo3->setLegende("Bombardement Allemand");
        $photo3->setPath("photos/bombardement_allemand_14-15.jpg");
        $photo3->setSource("indefini");
        $photo3->setLienUrl("indefini");

        $photo4 = new Photos();
        $photo4->setLegende("Siège de la ville de Liège");
        $photo4->setPath("photos/Siege_of_liege.jpg");
        $photo4->setSource("indefini");
        $photo4->setLienUrl("indefini");


        // On la persiste
        $manager->persist($photo1);
        $manager->persist($photo2);
        $manager->persist($photo3);
        $manager->persist($photo4);


        // On déclenche l'enregistrement
        $manager->flush();
    }
}



