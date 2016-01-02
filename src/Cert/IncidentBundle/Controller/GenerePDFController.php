<?php

namespace Cert\IncidentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class GenerePDFController extends Controller
{
    public function genererpdfAction()
    {
        $em     = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CertIncidentBundle:Vulnerabilite')->find(19);
        $html   = $this->renderView('CertIncidentBundle:IncidentFront:vulnerabilite_content.html.twig',
                array(
                    'entity'=>$entity
                )
            );
   
    }

}
