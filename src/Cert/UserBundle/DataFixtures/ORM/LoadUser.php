<?php
 
namespace Cert\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cert\UserBundle\Entity\User;

/**
* 
*/
class LoadUser implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		
		//les noms d'utilisateurs a creer
		$listNames = array('Yacine', 'Fatou', 'Lamine');
		$passeword = 'passer';

		foreach ($listNames as $name) 
		{
			// on cree l'utilisateur
			$user = new User;

			//le nom d'utilisateur et le mot de passe sont identiques
			$user->setUsername($name);
			$user->setPassword($passeword);

			// on ne se sert pas du sel pour l'instant
			$user->setSalt('');

			// on definit uniquement le role ROLE_USER qui est le role de base
			$user->setRoles(array('ROLE_USER'));

			// on le persiste
			$manager->persist($user);
		}

		// on declenche l'enregistrement
		$manager->flush();	
	}
}




?>