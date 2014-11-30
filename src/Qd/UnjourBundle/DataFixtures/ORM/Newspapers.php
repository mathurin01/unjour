<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/Newspapers.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Newspapers;

class Newspaper extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Liste des noms de journaux à ajouter
        $noms = array(
            'L\'Action Française',
            'La Croix',
            'L\'Echo d\'Alger',
            'L\'Echo de Paris',
            'Le Figaro',
            'Le Gaulois',
            'Gil Blas',
            'L\'Humanité',
            'L\'Intransigeant',
            'Journal des Débats Politiques et Littéraire',
            'Le matin',
            'Le Petit Journal',
            'Le Petit Parisien',
            'La Presse',
            'Le Rappel',
            'Le Siècle',
            'Le Temps',
            'La Lanterne'
        );

        // Liste des noms de path à ajouter
        $path = array(
            'titrejournaux/L_Action_Francaise.jpg',
            'titrejournaux/La_Croix.jpg',
            'titrejournaux/L_Echo_d_Alger.jpg',
            'titrejournaux/L_Echo_de_Paris.jpg',
            'titrejournaux/Le_Figaro.jpg',
            'titrejournaux/Le_Gaulois.jpg',
            'titrejournaux/Gil_Blas.jpg',
            'titrejournaux/L_Humanite.jpg',
            'titrejournaux/L_Intransigeant.jpg',
            'titrejournaux/Journal_Des_Debats.jpg',
            'titrejournaux/Le_Matin.jpg',
            'titrejournaux/Le_Petit_Journal.jpg',
            'titrejournaux/Le_Petit_Parisien.jpg',
            'titrejournaux/La_Presse.jpg',
            'titrejournaux/Le_Rappel.jpg',
            'titrejournaux/Le_Siecle.jpg',
            'titrejournaux/Le_Temps.jpg',
            'titrejournaux/La_Lanterne.jpg'
        );
        foreach($noms as $i => $nom)
        {
            $listejournaux = new Newspapers();
            $listejournaux->setName($nom);
            $listejournaux->setDescr("indefini");
            $listejournaux->setPath($path[$i]);

            $manager->persist($listejournaux);
        }
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 4;
    }
}



