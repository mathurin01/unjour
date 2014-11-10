<?php 
// src/Qd/UnjourBundle/DataFixtures/ORM/tags.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Tags;

class Tag implements FixtureInterface
{
// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		// Liste des noms de catégorie à ajouter
		$noms = array(
			'Front de l\'ouest', 
			'Front de l\'est', 
			'Italie', 
			'Moye-Orient',
			'Balkans',
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
			'Innovations'
		);
		foreach($noms as $i => $nom)
		{
			// On crée le tag
			$liste_tags[$i] = new Tags();
			$liste_tags[$i]->setNom($nom);
			$liste_tags[$i]->setIndice(1);
	
			// On la persiste
			$manager->persist($liste_tags[$i]);
		}

		// On déclenche l'enregistrement
		$manager->flush();
	}
}



