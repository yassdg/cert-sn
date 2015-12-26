<?php

namespace Cert\IncidentBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cert\IncidentBundle\Entity\Alerte;
use Cert\IncidentBundle\Form\AlerteType;

/**
 * Alerte controller.
 *
 */
class AlerteController extends Controller
{

    /**
     * Lists all Alerte entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CertIncidentBundle:Alerte')->findAll();
        return $this->render('CertIncidentBundle:Alerte:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function createAction(Request $request)
    {
        //l'utilisateur a les droit de creer un nouvel utilisateur
        $entity = new Alerte();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $params = $request->request->get('cert_incidentbundle_alerte');
            $preferencArray = explode(';', $params['reference']);
            $entity->setReference($preferencArray);
            $user = $this->get('security.context')->getToken()->getUser();
            $entity->setUser($user);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_alerte_show', array('id' => $entity->getId())));
        }
        return $this->render('CertIncidentBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /**
     * Creates a form to create a Alerte entity.
     *
     * @param Alerte $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Alerte $entity)
    {
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('admin_alerte_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    /**
     * Displays a form to create a new Alerte entity.
     *
     */
    public function newAction()
    {
        $entity = new Alerte();
        $form   = $this->createCreateForm($entity);

        return $this->render('CertIncidentBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /**
     * Finds and displays a Alerte entity.
     *
     */
    public function showAction($id)
    {
        $em         = $this->getDoctrine()->getManager();
        $entity     = $em->getRepository('CertIncidentBundle:Alerte')->find($id);
        $references = $entity->getReference(); 
        if (!$entity) {
            throw $this->createNotFoundException('alerte inexistante.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CertIncidentBundle:Alerte:show.html.twig', array(
            'entity'      => $entity,
            'references'  => $references,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Alerte entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertIncidentBundle:Alerte')->find($id);
        $tabParam = $entity->getReference();
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Alerte entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('CertIncidentBundle:Alerte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Alerte entity.
    *
    * @param Alerte $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Alerte $entity)
    {
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('admin_alerte_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Update'));
        return $form;
    }
    /**
     * Edits an existing Alerte entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CertIncidentBundle:Alerte')->find($id);
        $tabParam = $entity->getReference();
        $preferencArray = explode(';', $tabParam);
        $entity->setReference($preferencArray);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Alerte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_alerte_edit', array('id' => $id)));
        }
        return $this->render('CertIncidentBundle:Alerte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Alerte entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CertIncidentBundle:Alerte')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Alerte entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_alerte'));
    }
    /**
     * Creates a form to delete a Alerte entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_alerte_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
