<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/Acteurs.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Acteurs;

class Acteur implements FixtureInterface
{
// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $act = new Acteurs();
        $act->setDateDeces(new \DateTime("1914-08-02"));
        $act->setDateNais(new \DateTime("1893-06-11"));
        $act->setDescr("Commandant une escouade de la 6e compagnie du 2e bataillon de 44e régiment d'infanterie de Lons-le-Saunier, il fait barrage le 2 août 1914 à un détachement de reconnaissance allemand de huit hommes du 5e régiment de chasseurs à cheval (de) de Mulhouse, qui progresse vers Joncherey en venant de Faverois après avoir violé la frontière française. Le sous-lieutenant Camille Mayer commande ce détachement. Après avoir sabré sans la tuer la sentinelle française postée en avant de l'escouade, Camille Mayer tire trois fois en direction de Jules André Peugeot. Ce dernier réplique et abat le cavalier d’une balle dans le ventre. La deuxième balle allemande a mortellement blessé Jules André Peugeot. Retournant sur ses pas, il s’affaisse devant la maison des Docourt et meurt à 10 h 07. Il est le premier mort militaire français d'une guerre qui ne commença officiellement que le lendemain 3 août, avec la déclaration de guerre de l’Allemagne à la France, et qui devait coûter la vie à dix millions d'Européens.");
        $act->setNom("Peugeot");
        $act->setPrenom("Jules-André");
        $act->setPhotosid(2);
        $act->setTagsid(15);
        $act->setPres("Il est le premier mort militaire français d'une guerre qui ne commença officiellement que le lendemain 3 août.");

        // On la persiste
        $manager->persist($act);

        // On déclenche l'enregistrement
        $manager->flush();
    }
}



