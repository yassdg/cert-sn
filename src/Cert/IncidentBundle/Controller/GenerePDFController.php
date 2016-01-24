<?php

namespace Cert\IncidentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class GenerePDFController extends Controller
{
    public function genererpdfAction()
    {
        $em     = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CertIncidentBundle:Vulnerabilite')->find(18);

        $html   = $this->renderView('CertIncidentBundle:IncidentFront:vulnerabilite_content.html.twig',
            array(
                'entity'=>$entity
            )
        );

        $this->get('knp_snappy.pdf')->generateFromHtml(

            $this->renderView(
                'CertIncidentBundle:IncidentFront:vulnerabilite_content.html.twig',
                array(
                    'entity'=>$entity
                )
            ),
            './uploads/documents/'.$entity->getId().'.pdf'
        );
        return new Response("Generation okkk !!!"
            //header('location: http://www.google.com');
        );
    }
}
