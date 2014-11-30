<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/Actors.php

namespace Qd\UnjourBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Actors;

class Actor extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $act = new Actors();
        $act->setDeath(new \DateTime("1914-08-02"));
        $act->setBirth(new \DateTime("1893-06-11"));
        $act->setDescr("Commandant une escouade de la 6e compagnie du 2e bataillon de 44e régiment d'infanterie de Lons-le-Saunier, il fait barrage le 2 août 1914 à un détachement de reconnaissance allemand de huit hommes du 5e régiment de chasseurs à cheval (de) de Mulhouse, qui progresse vers Joncherey en venant de Faverois après avoir violé la frontière française. Le sous-lieutenant Camille Mayer commande ce détachement. Après avoir sabré sans la tuer la sentinelle française postée en avant de l'escouade, Camille Mayer tire trois fois en direction de Jules André Peugeot. Ce dernier réplique et abat le cavalier d’une balle dans le ventre. La deuxième balle allemande a mortellement blessé Jules André Peugeot. Retournant sur ses pas, il s’affaisse devant la maison des Docourt et meurt à 10 h 07. Il est le premier mort militaire français d'une guerre qui ne commença officiellement que le lendemain 3 août, avec la déclaration de guerre de l’Allemagne à la France, et qui devait coûter la vie à dix millions d'Européens.");
        $act->setName("Peugeot");
        $act->setFirstname("Jules-André");
        $act->setPhotos($manager->getRepository('QdUnjourBundle:Photos')->find(2));
        $jj=10;
        for($ii = 0; $ii < 2; $ii++){
            $act->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if($jj == 20){
                $jj = 1;
            }else
                $jj++;
        }
        $act->setPres("Il est le premier mort militaire français d'une guerre qui ne commença officiellement que le lendemain 3 août.");

        $manager->persist($act);
        $manager->flush();

        $act = new Actors();
        $act->setDeath(new \DateTime("1952-05-04"));
        $act->setBirth(new \DateTime("1879-07-14"));
        $act->setDescr("À la déclaration de guerre, Louis Barthas était tonnelier à Peyriac-Minervois et il reprit ce même métier après l'armistice. Militant socialiste, il avait participé dans sa région à la création du syndicat des ouvriers agricoles et partageait les idées pacifiques de Jean Jaurès. Mobilisé au 280e régiment d'infanterie de Narbonne avec le grade de caporal qu'il conserva pendant la durée du conflit. En décembre 1915, il rejoint le 296e régiment d'infanterie1, puis le 248e régiment d'infanterie en novembre 19172. Durant quatre ans, il combattit dans les secteurs les plus dangereux du front : Notre-Dame-de-Lorette, Verdun, la Somme et le Chemin des Dames et il sortit totalement épuisé de ses années de guerre.");
        $act->setName("Barthas");
        $act->setFirstname("Louis");
        $act->setPhotos($manager->getRepository('QdUnjourBundle:Photos')->find(5));
        $jj=12;
        for($ii = 0; $ii < 2; $ii++){
            $act->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if($jj == 20){
                $jj = 1;
            }else
                $jj++;
        }
        $act->setPres("Louis Barthas est un ancien combattant de la Grande Guerre. Il a écrit ses expériences de guerre dans un journal personnel très apprécié, sous le titre Les carnets de guerre de Louis Barthas, tonnelier, 1914-1918.");

        $manager->persist($act);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 9;
    }
}



