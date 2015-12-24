<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Form\ArticleType;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Categorie;
use Sdz\BlogBundle\Entity\Commentaire;
use Sdz\BlogBundle\Entity\Competence;

/**
* cette classe va gerer le controlleur de notre blog
*/
class BlogController extends Controller
{

	
	public function indexAction($page)
	{
		# code...
		//return $this->render('SdzBlogBundle:Blog:index.html.twig', array('nom' => 'yacine'));
		//$id=56;
		//$url=$this->generateUrl('sdzblog_voir', array('id' => $id));
		if ($page < 1)
		{
			throw $this->createNotFoundException('Page inexistente (page = '.$page.')');
			 // recuperation de la liste des articles, puis on le passera au template
			
		}
		//les articles:
		$articles = array(
			array('titre' => 'Mon weekend a Phi Phi Island !', 'id'
				=> 1, 'auteur' => 'winzou', 'contenu' => 'Ce weekend était trop
				bien. Blabla…', 'date' => new \Datetime()
			),
			array('titre' => 'Repetition du National Day de Singapour', 'id'
				=> 2, 'auteur' => 'winzou', 'contenu' => 'Bientôt prêt pour le jour
				J. Blabla…', 'date' => new \Datetime()
			),
			array('titre' => 'Chiffre d\'affaire en hausse', 'id'
				=> 3, 'auteur' => 'M@teo21', 'contenu' => '+500% sur 1 an, fabuleux.
				Blabla…', 'date' => new \Datetime()
			)
		);

		//puis modifier la ligne du render pour prendre en compte les articles
		return $this->render('SdzBlogBundle:Blog:index.html.twig', array('articles' => $articles ));
		//return $this->render($url);
	}

	public function voirAction($id)
	{
		
		//on recupere l'EntityManager
		$em = $this->getDoctrine()->getEntityManager();

		//on recupere l'entite correspondant a l'id $id
		$article = $em->getRepository('SdzBlogBundle:Article')->find($id);

		if ($article == null ) {
			throw new $this->createNotFoundException('Article[id='.$id.'] inexistant.');
			
		}

		//on recupere la liste des commentaires
		$liste_commentaire = $em->getRepository('SdzBlogBundle:Commentaire')->findAll();

		//puis modifier sur render pour prendre en compte ceci, pour prendre en compte l'article
		return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('article'=>$article, 
			'liste_commentaire' => $liste_commentaire));
	}


	public function voirSlugAction($slug,$annee,$format)
	{
		# code...
		return new Response("on pourrait afficher l'article correspondat  au slug'".$slug."', cree en ".$annee." et au format '".$format."'' .");
	}


	public function ajouterAction()
	{
		// on recupere l'entiteManager
		$em = $this->getDoctrine()->getManager();

		//on cree un objet Article 
		$article = new Article();
		$article->setDate( new \Datetime() );
		$form = $this->createForm(new ArticleType, $article);

		//on recupere la requete
		$request = $this->get('request');

		// on verifie qu'elle est de  type post
		if ( $request->getMethod()=='POST' ) {
			
			// on fait le lien requete <-> formulaire
			// apartir de la la variable $article comporte les valeur saisi dans le formulaire
			$form->bind($request);

			//on verifie que les valeur rentres sont corrects
			if ($form->isValid()) {
				# on enregistre notre notre objet $article dans la BDD, oubien envoyer par email, ou autre chose
				$em = $this->getDoctrine()->getManager();
				$em->persist($article);
				$em->persist($article->getImage());
				$em->flush();

				//on redirige vers la page de visualisation de l4article nouvelle;ent cree
				return $this->redirect($this->generateUrl('sdzblog_accueil'));
			}
		}

		// a ce stade, soit : - la requete est de type GET , donc le visiteur vient d'arriver sur 
		//la page et veut voir le formulaire. -soit la requete est de type POST, ,ais le form non valide
		// donc on l'affiche de nouveau
		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig',array('form'=>$form->createView()));
	}
		
	//ajout d'un article existant a plusieurs categories existantes:
	public function modifierAction($id)
	{
		# ici on recupere l'id de larticle correspondant a l'$id
		$em = $this->getDoctrine()->getManager();

		//on soccupe de la gestion et creation du formulaire
		$article = $em->getRepository('SdzBlogBundle:Article')->find($id); 

		if ($article === null) {
			# code...
			throw new $this->createNotFoundException('Article[id='.$id.']inexistant.');
		}

		// on recupere tous les categories:
		$liste_categories = $em->getRepository('SdzBlogBundle:Categorie')->findAll();

		//on boucle sur les categories pour les lier a l'article
		foreach ($liste_categories as $categorie) 
		{
			$article->addCategory($categorie);
		}

		// $em->persist($article) deja fait car on la recuperer avec doctrine

		//declencher la modification
		$em->flush();

		return new Response('OK');
	}


	//suppression des categories d'un article:
	public function supprimerAction($id)
	{
		# ici on recupere l'EntityManager
		$em = $this->getDoctrine()->getManager();

		//on recupere l'entite correspondant  a l'id $id 
		$article = $em->getRepository('SdzBlogBundle:Article')->find($id);

		if ($article === null) 
		{
			throw new $this->createNotFoundException('Article[id='.$id.'] inexistant.');
			
		}

		//on recupere toutes les categories:
		$liste_categories = $em->getRepository('SdzBlogBundle:Categorie')->findAll();

		//on enleve tous les categories de l'article
		foreach ($liste_categories as $categorie) 
		{
			# on fait appel a removeCategorie()
			// et $categorie est une instance de Categorie et non un id seulement
			$article->removeCategory($categorie);
		}

		//on na pas modifiee les categories: inutile de les persister

		//on a modifiee la relation Article-Caregorie 
		//il faudrait persister l'eentitee proprietaire pour persister la relation
		//or l'article a ete recuperee depuis Doctrine

		//on declenche la modification
		$em->flush();

		//on soccupe de la gestion et creation du formulaire
		return new Response('OK');
	}

	public function menuAction($nombre)
	{
		// $nombre est l'arguement kon a transmis via with depuis la vue
		# on fixe une liste ici, kon va par la suite recuperer depuis la BDD
		//on pourra recuperer $nombre articles depuis la BDD , qui peut changer kan on appelle cette action
		$liste  = array(
		 	array('id' => 2, 'titre'=>'Dernier weekend !' ),
		 	array('id' => 5, 'titre'=>'Sortie Symfony2.1.' ),
		 	array('id' => 9, 'titre'=>'Petit test.' )
		);

		return  $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
			'liste_articles' => $liste //le controleur passe les variables necessaire au template
		));
	}
}
?>