<?php

namespace Cert\IncidentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Cert\IncidentBundle\Entity\Incident;
use Cert\IncidentBundle\Form\IncidentFrontType;
use Cert\IncidentBundle\Entity\Visiteur;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
* cette classe va gerer le controlleur de notre site pour la partie gestion des incidents
*/
class IncidentFrontController extends Controller
{
	
	public function indexAction()
	{
		
		# on recupere l'EntiteManager
		$em = $this->getDoctrine()->getManager();

		// on recupere la liste des alertes enregistres dans la base de donnees
		$liste_alertes = $em->getRepository('CertIncidentBundle:Alerte')->findAll();

		// on recupere la liste des vulnerabilites enregistres
		$liste_vulnerabilite = $em->getRepository('CertIncidentBundle:Vulnerabilite')->findAll();

		//recuperation de la liste des annonces de la BD
		$liste_annonces = $em->getRepository('CertIncidentBundle:Annonce')->findAll();


		// retourner la liste a la page index.html.twig qui doit les afficher
		return $this->render('CertIncidentBundle:IncidentFront:index.html.twig',array(
			'liste_vulnerabilite' => $liste_vulnerabilite,
			'liste_alertes' => $liste_alertes,
			'liste_annonces' => $liste_annonces));

		//retourner la liste a la page de listing des alertes
		return $this->render('CertIncidentBundle:IncidentFront:listeAlerte.html.twig', array('liste_alertes' => $liste_alertes));
	}

	public function aproposAction()
	{
		# code...
		return $this->render('CertIncidentBundle:IncidentFront:apropos.html.twig');
	}

	public function declarerAction()
	{

		//creation de l'objet Incident
		$incident = new Incident();
		$incident->setDateDeclaration( new \Datetime() );

		//creation du formulaire
		$form = $this->createForm( new IncidentFrontType, $incident );

		//recuperation du requete
		$request = $this->get('request');
		if ( $request->getMethod() == 'POST' ) 
		{
			$form->bind( $request );
			if ( $form->isValid() ) 
			{
				$em = $this->getDoctrine()->getManager();

				//enregistrement en BDD, on peut aussi l'envoyer par email, ou autre chose
				$em->persist($incident);
				$em->persist($incident->getVisiteur());
				$em->flush();

				//par de redirection apres envoie formulaire
				return $this->redirect( $this->generateUrl('cert_incident_accueil'));
			}
		}
		return $this->render('CertIncidentBundle:IncidentFront:declarer.html.twig', array('form' =>$form->createView()));
	}

	public function listerIncidentAction()
	{
		# on recupere l'EntiteManager
		$em = $this->getDoctrine()->getManager();

		// on recupere la liste des incidents enregistres
		$liste_incident = $em->getRepository('CertIncidentBundle:Incident')->findAll();

		// retournee la liste a la page qui doit les afficher
		return $this->render('CertIncidentBundle:IncidentFront:listerIncident.html.twig', array('liste_incident' => $liste_incident));
	}

	
	public function listerVulnerabiliteAction()
	{
		// on teste que l'Visiteur dispose bien du role ROLE_EXPERTINFO
		if (! $this->get('security.context')->isGranted('ROLE_EXPERTINFO') )
		{
			// on declenche une exception "Access Interdit"
			throw new AccessDeniedHttpException("Access limitee aux experts informaticiens !!!");
			
		}
		# on recupere l'EntiteManager
		$lesVulnerabilite = $this->getDoctrine()
								->getManager()
								->getRepository('CertIncidentBundle:Vulnerabilite')
								->findBy(array(),array('id'=>'DESC'))
		;
		
		$pagine = $this->get('knp_paginator');
		$pagination = $pagine->paginate($lesVulnerabilite, $this->get('request')->query->get('page',1),4);
		
		return $this->render('CertIncidentBundle:IncidentFront:vulnerabilite.html.twig', array('pagination' => $pagination));
	}

	public function listeAlerteAction()
	{
		
		$alerte = $this->getDoctrine()
							->getManager()
							->getRepository('CertIncidentBundle:Alerte')
							->findBy(array(),array('id'=> 'DESC'))
		;

		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($alerte, $this->get('request')->query->get('page',1),4);
		
		return $this->render('CertIncidentBundle:IncidentFront:listeAlerte.html.twig', array('pagination' => $pagination));
	}

	public function listeAnnonceAction()
	{
		
		# on recupere l'EntiteManager
		$repository = $this->getDoctrine()->getManager()->getRepository('CertIncidentBundle:Annonce');

		// on recupere la liste des vulnerabilites enregistres
		$annonces = $repository->findAll();

		// retournee la liste a la page qui doit les afficher
		return $this->render('CertIncidentBundle:IncidentFront:listeAnnonce.html.twig', array('annonces' => $annonces));
	}


	public function listeArticlesAction()
	{
		# on recupere l'EntiteManager
		$em = $this->getDoctrine()->getManager();

		// on recupere la liste des articles enregistres dans la base de donnees
		$liste_articles = $em->getRepository('CertIncidentBundle:Articles')->findAll();

		// retournee la liste a la page qui doit les afficher
		return $this->render('CertIncidentBundle:IncidentFront:articles.html.twig', array('liste_articles' => $liste_articles));
	}

	/**
     * Finds and displays a Alerte entity.
     *
     */
    public function voirAlerteAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertIncidentBundle:Alerte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('alerte inexistante.');
        }

        return $this->render('CertIncidentBundle:IncidentFront:voirAlerte.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Finds and displays a Vulnerabilite entity.
     *
     */
    public function voirVulnerabiliteAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertIncidentBundle:Vulnerabilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('vulnerabilite inexistante.');
        }

        return $this->render('CertIncidentBundle:IncidentFront:voirVulnerabilite.html.twig', array(
            'entity'      => $entity,
        ));
    }

     /**
     * Finds and displays a Annonce entity.
     *
     */
    public function annonceAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertIncidentBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        return $this->render('CertIncidentBundle:IncidentFront:annonce.html.twig', array(
            'entity'      => $entity,
        ));
    }


}
?>