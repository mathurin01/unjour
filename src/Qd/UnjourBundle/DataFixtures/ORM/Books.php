<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/Books.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Books;

class Book extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $carnet1 = new Books();
        $carnet1->setDcreat(new \DateTime("1914-08-02"));
        $carnet1->setTexte("Une après-midi brûlante d'août, les rues du villages quasi désertes soudain un roulement de tambour : c'est sans doute un déballage d'un marchand forain sur \" la Place \" ou bien des acrobates qui annoncent leur représentation du soir.
Mais non ce n'est pas cela, car le tambour s'étant tu, on entend la voix de l'appariteur, du \" commissaire \", comme on désigne cet unique représentant de l'autorité communale. Alors on tend les oreilles, s'attendant à entendre la lecture d'un arrêté sur la rage ou sur la propreté des rues.
Hélas ! cet homme annonçait après le déluge, le plus effroyable cataclysme qui eût jamais affligé notre humanité, il annonçait le plus grand de tous les fléaux, celui qui engendre tous les maux : il annonçait la mobilisation générale, prélude de la guerre, la guerre maudite, infâme, déshonorante pour notre siècle, flétrissante pour notre civilisation dont nous étions  si orgueilleux.
Cette annonce, à ma grande stupeur souleva plus d'enthousiasme que de désolation ; des gens inconscients semblaient fiers de vivre un temps où quelque chose de grand, de formidable allait se passer ; les moins emballés ne doutaient pas un instant d'une prompte et décisive victoire.");
        $carnet1->setThanks("Remerciement aux éditions machins");
        $carnet1->setActors($manager->getRepository('QdUnjourBundle:Actors')->find(2));
        $jj=1;
        for($ii = 0; $ii < 3; $ii++){
            $carnet1->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if($jj == 20){
                $jj = 1;
            }else
                $jj++;
        }
        $carnet1->setPhotos($manager->getRepository('QdUnjourBundle:Photos')->find(5));

        $carnet2 = new Books();
        $carnet2->setDcreat(new \DateTime("1914-08-04"));
        $carnet2->setTexte("Le 4 août, troisième jour de la mobilisation, la moitié environ des hommes mobilisés du village s'embarqua à la gare, accompagnée par la presque totalité de la population.
Tout le monde montra un vrai ou un faux courage et il n'y eut que deux femmes aux nerfs trop sensibles qui s'évanouirent en voyant partir leur fils ou leur époux.
En ce moment, j'étais à peine hors de danger d'une grave maladie, un érysipèle à la face qui m'avait enlevé toutes mes forces ; le 4 août, jour fixé pour mon départ, c'était tout juste si je pouvais faire le tour de ma chambre. Je n'étais guère en état de marcher sur Berlin !
Les gendarmes, prévenus de l’impossibilité de mon départ ne voulurent rien entendre, je devais partir comme les autres , je ne m'appartenais plus, j'appartenais à la Patrie comme une âme damnée de Satan.");
        $carnet2->setThanks("Remerciement aux éditions machins");
        $carnet2->setActors($manager->getRepository('QdUnjourBundle:Actors')->find(2));
        $jj=1;
        for($ii = 0; $ii < 3; $ii++){
            $carnet2->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if($jj == 20){
                $jj = 1;
            }else
                $jj++;
        }
        $carnet2->setPhotos($manager->getRepository('QdUnjourBundle:Photos')->find(5));

        $carnet3 = new Books();
        $carnet3->setDcreat(new \DateTime("1914-11-08"));
        $carnet3->setTexte("Le 8 novembre 1914 à neuf heures du matin nous arrivâmes au terme de notre voyage par voie ferrée.
La gare où nous débarquâmes par une ironie du sort s'appelait Barlin. Sur les wagons de notre train entre autres inscriptions on lisait écrit à la craie : \" Mort à Guillaume !! à Berlin ! à Berlin ! \"
Hélas ! c'était presque à Berlin que nous arrivions, à une lettre prêt et à un millier de kilomètres loin.
Ce fut à Barlin où j'entendis pour la première fois le bruit du canon du front, je tournai la tête de ce coté comme instinctivement une bête se tourne du coté où elle flaire un danger et dans le brouillard je ne vis surgir confusément que d'espèces de collines à forme pyramidale que l'on me dit être des crassiers de charbon. Nous étions en plein pays minier.");
        $carnet3->setThanks("Remerciement aux éditions machins");
        $carnet3->setActors($manager->getRepository('QdUnjourBundle:Actors')->find(2));
        $jj=1;
        for($ii = 0; $ii < 3; $ii++){
            $carnet3->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if($jj == 20){
                $jj = 1;
            }else
                $jj++;
        }
        $carnet3->setPhotos($manager->getRepository('QdUnjourBundle:Photos')->find(5));

        $carnet4 = new Books();
        $carnet4->setDcreat(new \DateTime("1914-12-01"));
        $carnet4->setTexte("Le 1er décembre nous étions au repos , dispersés dans les corons d'Annequin où nous nous étions installés en maîtres. Il était  près de midi lorsque parvint l'ordre de monter nos sac et de nous tenir prêt à partir.");
        $carnet4->setThanks("Remerciement aux éditions machins");
        $carnet4->setActors($manager->getRepository('QdUnjourBundle:Actors')->find(2));
        $jj=1;
        for($ii = 0; $ii < 3; $ii++){
            $carnet4->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if($jj == 20){
                $jj = 1;
            }else
                $jj++;
        }
        $carnet4->setPhotos($manager->getRepository('QdUnjourBundle:Photos')->find(5));

        $carnet5 = new Books();
        $carnet5->setDcreat(new \DateTime("1914-12-07"));
        $carnet5->setTexte("Le 7 décembre à l'aube on constata un ralentissement anormal  de la fusillade habituelle de la part de nos adversaires, puis ce fût le silence complet.
Était-ce un piège qui nous était tendu ?
Des patrouilles s'approchèrent prudemment des positions allemandes qu'on trouva vides d'occupants.
Pendant la nuit nos voisins et adversaires nous avaient faussé compagnie et évacué Vermelles et les tranchées environnantes.
Ils n'étaient pas partis pour nous faire plaisir mais parce qu’ils se trouvaient dans un saillant aigu où ils étaient pris d'enfilade par nos feux croisés.
C'était un simple rectifications de leurs lignes, mais nos gros galonnés enthousiasmés par ce facile succès crurent que c'était la grande retraite allemande, annoncée tous les jours par Hervé dans son journal, qui commençait.");
        $carnet5->setThanks("Remerciement aux éditions machins");
        $carnet5->setActors($manager->getRepository('QdUnjourBundle:Actors')->find(2));
        $jj=1;
        for($ii = 0; $ii < 3; $ii++){
            $carnet5->addTag($manager->getRepository('QdUnjourBundle:Tags')->find($jj));
            if($jj == 20){
                $jj = 1;
            }else
                $jj++;
        }
        $carnet5->setPhotos($manager->getRepository('QdUnjourBundle:Photos')->find(5));

        $manager->persist($carnet1);
        $manager->persist($carnet2);
        $manager->persist($carnet3);
        $manager->persist($carnet4);
        $manager->persist($carnet5);

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



