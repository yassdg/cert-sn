<?php

namespace Cert\IncidentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cert\IncidentBundle\Entity\Vulnerabilite;
use Cert\IncidentBundle\Form\VulnerabiliteType;

/**
 * Vulnerabilite controller.
 *
 */
class VulnerabiliteController extends Controller
{

    /**
     * Lists all Vulnerabilite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CertIncidentBundle:Vulnerabilite')->findAll();

        return $this->render('CertIncidentBundle:Vulnerabilite:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Vulnerabilite entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Vulnerabilite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $params = $request->request->get('cert_incidentbundle_vulnerabilite');
            $preferencArray = explode(';', $params['reference']);
            $entity->setReference($preferencArray);
            $uploader   = $this->get('uploader_image');
            $files      = $request->files->get('cert_incidentbundle_vulnerabilite');
            $imagePath  = $uploader->upload($files['fichier']);
            $entity->setImage($imagePath);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_vulnerabilite_show',array(
                'id' => $entity->getId()
                )
            ));
        }

        return $this->render('CertIncidentBundle:Vulnerabilite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Vulnerabilite entity.
     *
     * @param Vulnerabilite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Vulnerabilite $entity)
    {
        $form = $this->createForm(new VulnerabiliteType(), $entity, array(
            'action' => $this->generateUrl('admin_vulnerabilite_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Vulnerabilite entity.
     *
     */
    public function newAction()
    {
        $entity = new Vulnerabilite();
        $form   = $this->createCreateForm($entity);

        return $this->render('CertIncidentBundle:Vulnerabilite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Vulnerabilite entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertIncidentBundle:Vulnerabilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vulnerabilite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CertIncidentBundle:Vulnerabilite:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Vulnerabilite entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertIncidentBundle:Vulnerabilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vulnerabilite entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CertIncidentBundle:Vulnerabilite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Vulnerabilite entity.
    *
    * @param Vulnerabilite $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Vulnerabilite $entity)
    {
        $form = $this->createForm(new VulnerabiliteType(), $entity, array(
            'action' => $this->generateUrl('admin_vulnerabilite_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Vulnerabilite entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertIncidentBundle:Vulnerabilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vulnerabilite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $uploader   = $this->get('uploader_image');
            $files      = $request->files->get('cert_incidentbundle_vulnerabilite');
            $imagePath  = $uploader->upload($files['fichier']);
            $entity->setImage($imagePath);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_vulnerabilite_edit', array('id' => $id)));
        }

        return $this->render('CertIncidentBundle:Vulnerabilite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Vulnerabilite entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CertIncidentBundle:Vulnerabilite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vulnerabilite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_vulnerabilite'));
    }

    /**
     * Creates a form to delete a Vulnerabilite entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_vulnerabilite_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
