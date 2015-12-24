<?php
	namespace Sdz\BlogBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Sdz\BlogBundle\Entity\Competence;

	

	class Competences implements FixtureInterface
	{
		
		public function load(ObjectManager $manager)
		{
			# liste des noms de competence a ajouter
			$noms = array('Doctrine', 'Formulaire', 'Twig');
			foreach ($noms as $i => $nom) 
			{
				# creation de la competence
				$liste_competences[$i] = new Competence();
				$liste_competences[$i]->setNom($nom);

				//on la persiste
				$manager->persist($liste_competences[$i]);
			}

			//on declenche l'enregistrement
			$manager->flush();
		}
		
	}


?>