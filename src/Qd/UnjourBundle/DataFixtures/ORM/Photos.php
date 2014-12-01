<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/Photos.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Photos;

class Photo extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $mytab = array(
            1 => array("Carte de l'Allemagne", "photos/2014-10-08_090932.jpg", "", "", ""),
            1 => array("Photo de Jules-André Peugeot", "photos//A_photo_of_Jules_Andre_Peugeot.jpg", "", "", ""),
            1 => array("Bombardement Allemand", "photos/bombardement_allemand_14-15.jpg", "", "", ""),
            1 => array("Siège de la ville de Liège", "photos/Siege_of_liege.jpg", "", "", ""),
            1 => array("Louis Barthas", "photos/Louis_Barthas.jpg", "", "", ""),
            1 => array("Soldats français portant des masques à gaz dans une tranchée", "photos/Soldats_francais_portant_des_masques_a_gaz_dans_une_tranchee.jpg", "http://gallica.bnf.fr/ark:/12148/btv1b530027351", "<a title='Lien vers le document' target='_blank' href='http://gallica.bnf.fr/ark:/12148/btv1b530027351/f1.item'><img alt='[Soldats français portant des masques à gaz dans une tranchée] : [photographie de presse] / [Agence Rol]' src='http://gallica.bnf.fr/ark:/12148/btv1b530027351/f1.item.lowres' /><br />[Soldats français portant des masques à gaz dans une tranchée] : [photographie de presse] / [Agence Rol]<br/> Source: gallica.bnf.fr </a>", array(23)),
            1 => array("Tommies jouant au football avec des masques contre le gaz", "photos/Tommies_jouant_au_football_avec_des_masques_contre_le_gaz.jpg", "http://gallica.bnf.fr/ark:/12148/btv1b6952873h", "<a title='Lien vers le document' target='_blank' href='http://gallica.bnf.fr/ark:/12148/btv1b6952873h/f1.item'><img alt='Tommies jouant au football avec des masques contre le gaz : [photographie de presse] / [Agence Rol]' src='http://gallica.bnf.fr/ark:/12148/btv1b6952873h/f1.item.lowres' /><br />Tommies jouant au football avec des masques contre le gaz : [photographie de presse] / [Agence Rol]<br/> Source: gallica.bnf.fr </a>", array(23)),
            1 => array("Un poste avertisseur pour signaler les attaques de gaz", "photos/Un_poste_avertisseur_pour_signaler_les_attaques_de_gaz.jpg", "http://gallica.bnf.fr/ark:/12148/btv1b6952873h", "<a title='Lien vers le document' target='_blank' href='http://gallica.bnf.fr/ark:/12148/btv1b6953126r/f1.item'><img alt='Un poste avertisseur pour signaler les attaques de gaz : [photographie de presse] / [Agence Rol]' src='http://gallica.bnf.fr/ark:/12148/btv1b6953126r/f1.item.lowres' /><br />Un poste avertisseur pour signaler les attaques de gaz : [photographie de presse] / [Agence Rol]<br/> Source: gallica.bnf.fr </a>", array(23)),
            1 => array("En pays bombardé [mère et enfant munis de masques à gaz]", "photos/mere_et_enfant_munis_de_masques_a_gaz.jpg", "http://gallica.bnf.fr/ark:/12148/btv1b53004018k", "<a title='Lien vers le document' target='_blank' href='http://gallica.bnf.fr/ark:/12148/btv1b53004018k/f1.item'><img alt='En pays bombardé [mère et enfant munis de masques à gaz] : [photographie de presse] / [Agence Rol]' src='http://gallica.bnf.fr/ark:/12148/btv1b53004018k/f1.item.lowres' /><br />En pays bombardé [mère et enfant munis de masques à gaz] : [photographie de presse] / [Agence Rol]<br/> Source: gallica.bnf.fr </a>", array(23)),
            1 => array("Carte de l'Allemagne", "photos/2014-10-08_090932.jpg", "", "", ""),
            1 => array("Carte de l'Allemagne", "photos/2014-10-08_090932.jpg", "", "", ""),
        );

        foreach($mytab as $i => $tab)
        {
            $photo = new Photos();
            $photo->setLegende($tab[0]);
            $photo->setPath($tab[1]);
            $photo->setSource($tab[2]);
            $photo->setLienUrl($tab[3]);
            if($tab[4]){
                foreach($tab[4] as $i => $t){
                    $photo->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($t));
                }
            }
            $manager->persist($photo);
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
        return 2;
    }
}



