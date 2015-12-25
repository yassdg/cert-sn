<?php

namespace Cert\IncidentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cert\IncidentBundle\Entity\Incident;
use Cert\IncidentBundle\Form\IncidentType;

/**
 * Incident controller.
 *
 */
class IncidentController extends Controller
{

    /**
     * Lists all Incident entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CertIncidentBundle:Incident')->findAll();

        $entityForms = array();
        foreach ($entities as $incident) {
            $editForm = $this->createEditForm($incident);
            $result = array(
                "id"=>$incident->getId(),
                "form"=> $editForm->createView(),
                "incident"=> $incident
            );
            $entityForms[] = $result;
        }
        return $this->render('CertIncidentBundle:Incident:index.html.twig', array(
            'entities' => $entityForms,
        ));
    }
    /**
     * Creates a new Incident entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Incident();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('expert_incident_show', array('id' => $entity->getId())));
        }
        return $this->render('CertIncidentBundle:Incident:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /**
     * Creates a form to create a Incident entity.
     *
     * @param Incident $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Incident $entity)
    {
        $form = $this->createForm(new IncidentType(), $entity, array(
            'action' => $this->generateUrl('expert_incident_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Créer'));
        return $form;
    }

    /**
     * Displays a form to create a new Incident entity.
     *
     */
    public function newAction()
    {
        $entity = new Incident();
        $form   = $this->createCreateForm($entity);
        return $this->render('CertIncidentBundle:Incident:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Incident entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CertIncidentBundle:Incident')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Incident entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('CertIncidentBundle:Incident:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Incident entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CertIncidentBundle:Incident')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Incident entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('CertIncidentBundle:Incident:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
    * Creates a form to edit a Incident entity.
    *
    * @param Incident $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Incident $entity)
    {
        $form = $this->createForm(new IncidentType(), $entity, array(
            'action' => $this->generateUrl('expert_incident_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Traiter'));
        return $form;
    }
    /**
     * Edits an existing Incident entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CertIncidentBundle:Incident')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Incident entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $user = $this->get('security.context')->getToken()->getUser();
            $entity->setUser($user);
            $entity->setTraitee(true);
            $em->flush();
            return $this->redirect($this->generateUrl('expert_incident_edit', array('id' => $id)));
        }
        return $this->render('CertIncidentBundle:Incident:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Incident entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CertIncidentBundle:Incident')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Incident entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('expert_incident'));
    }

    /**
     * Creates a form to delete a Incident entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('expert_incident_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
