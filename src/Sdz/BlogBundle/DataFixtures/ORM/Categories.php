<?php

namespace Sdz\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sdz\BlogBundle\Entity\Categorie;


class Categories implements FixtureInterface
{

    // dans l'argument de la methode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        
        //liste des noms de categorie a ajouter
        $noms = array('Symfony2', 'Doctrine2', 'Tutoriel', 'Evenement');

        foreach ($noms as $i => $nom) {
            
            //on cree la categorie
            $liste_categories[$i] = new Categorie();
            $liste_categories[$i]->setNom($nom);

            //on la persiste
            $manager->persist($liste_categories[$i]);
        }

        //on declenche l'enregistrement
        $manager->flush();
    }
}
