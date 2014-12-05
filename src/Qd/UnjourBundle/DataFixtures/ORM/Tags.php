<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/tags.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Tags;

class Tag extends AbstractFixture implements OrderedFixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de tag à ajouter
        $noms = array(
            'Front de l\'ouest',
            'Front de l\'est',
            'Italie',
            'Moyen-Orient',
            'Balkans',
            'Afrique',
            'Marine',
            'Aviation',
            'Politique',
            'Asie et Pacifique',
            'Galipoli',
            'Grandes Batailles',
            'Batailles',
            'Combats',
            'Technologies',
            'Santé - Médecine',
            'Lieux',
            'Anecdotes',
            'Artillerie',
            'Innovations',
            'Guerre de mouvement',
            'Course à la mer',
            'Guerre des gaz',
            'Verdun',
            'Somme',
            'Révolution Russe',
            'Chemin des Dames',
            'Mutineries',
            'Passchendaele (3ème bataille d\'Ypres)',
            'Manche et mer du Nord',
            'Méditérranée',
            'Baltique',
            'Atlantique',
            'Mer Noire',
            'Mer lointaines'
        );
        foreach ($noms as $i => $nom)
        {
            // On crée le tag
            $liste_tags[$i] = new Tags();
            $liste_tags[$i]->setNom($nom);
            $liste_tags[$i]->setLogo("indefini");
            $liste_tags[$i]->setIndice(1);

            // On la persiste
            $manager->persist($liste_tags[$i]);
        }

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
        return 1;
    }
}
