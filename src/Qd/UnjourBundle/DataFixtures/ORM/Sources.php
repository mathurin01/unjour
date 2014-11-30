<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/sources.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Source;
use Qd\UnjourBundle\Entity\Tags;

class Sources extends AbstractFixture implements OrderedFixtureInterface
{
// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de tag à ajouter
        $noms = array(
            1 => array('Wikipédia', 'Chronologie de la Première Guerre mondiale.', 'http://fr.wikipedia.org/w/index.php?title=Chronologie_de_la_Première_Guerre_mondiale&amp;oldid=103480138', '', '', ''),
            2 => array('Wikipedia contributors', 'Timeline of World War I', 'http://en.wikipedia.org/w/index.php?title=Timeline_of_World_War_I&oldid=609431256', '', '', ''),
            3 => array('Wikipedia, the free encyclopedia', 'Photo Jules André Peugeot', 'https://en.wikipedia.org/wiki/Jules_André_Peugeot', '', '', ''),
            4 => array('Wikipedia', 'Jules André Peugeot', '"http://fr.wikipedia.org/w/index.php?title=Jules-André_Peugeot&action=history', '', '', ''),
            5 => array('Wikipedia', 'Bataille de Liège', 'https://commons.wikimedia.org/wiki/File:Siege_of_liege.jpg#mediaviewer/Fichier:Siege_of_liege.jpg', '',  '', ''),
            6 => array('Wikipédia en français', 'Position fortifiée de Liège', 'http://fr.wikipedia.org/wiki/Position_fortifiée_de_Liège', '<a href="http://creativecommons.org/licenses/by-sa/3.0/deed.fr">Contenu soumis à la licence CC-BY-SA</a>. Source : Article <em><a href="http://fr.wikipedia.org/wiki/Position_fortifiée_de_Liège">Position fortifiée de Liège</a></em> de <a href="http://fr.wikipedia.org/">Wikipédia en français</a> (<a href="http://fr.wikipedia.org/w/index.php?title=Position_fortifiée_de_Liège&action=history">auteurs</a>', '', ''),
            7 => array('Musée de l\'armée.', 'Ordre de Mobilisation Générale 2 août 1914', 'http://www.musee-armee.fr/collections/base-de-donnees-des-collections/objet/ordre-de-mobilisation-generale-du-2-aout-1914.html', '', '', ''),
            8 => array('Wikipédia', 'Chronologie navale de la Première Guerre mondiale', 'http://fr.wikipedia.org/w/index.php?title=Spécial:Citer&page=Chronologie_navale_de_la_Première_Guerre_mondiale&id=108774823', '<a href="http://creativecommons.org/licenses/by-sa/3.0/deed.fr">Contenu soumis à la licence CC-BY-SA</a>. Source : Article <em><a href="http://fr.wikipedia.org/wiki/Chronologie_navale_de_la_Première_Guerre_mondiale">Chronologie navale de la Première Guerre mondiale</a></em> de <a href="http://fr.wikipedia.org/">Wikipédia en français</a> (<a href="http://fr.wikipedia.org/w/index.php?title=Chronologie_navale_de_la_Première_Guerre_mondiale&action=history">auteurs</a>)', '', ''),
            9 => array('ECPAD', 'Guerre des gaz', 'www.ecpad.fr/wp-content/uploads/2011/01/guerre_des_gaz.pdf', '', '', ''),

        );
        foreach($noms as $i => $nom)
        {
            // On crée le tag
            $source = new Source();
            $source->setName($nom[0]);
            $source->setTitle($nom[1]);
            $source->setPath1($nom[2]);
            $source->setPath2($nom[3]);
            $source->setAuteur($nom[4]);
            $source->setLogo($nom[5]);

            // On la persiste
            $manager->persist($source);
        }

        // On déclenche l'enregistrement
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 3;
    }
}



