<?php

namespace OSE\TimeClockBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OSE\TimeClockBundle\Entity\EntryType;
use OSE\TimeClockBundle\Form\EntryTypeType;

/**
 * EntryType controller.
 *
 */
class EntryTypeController extends Controller
{

    /**
     * Lists all EntryType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OSETimeClockBundle:EntryType')->findAll();

        return $this->render('OSETimeClockBundle:EntryType:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new EntryType entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new EntryType();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entrytype_show', array('id' => $entity->getId())));
        }

        return $this->render('OSETimeClockBundle:EntryType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a EntryType entity.
    *
    * @param EntryType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(EntryType $entity)
    {
        $form = $this->createForm(new EntryTypeType(), $entity, array(
            'action' => $this->generateUrl('entrytype_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EntryType entity.
     *
     */
    public function newAction()
    {
        $entity = new EntryType();
        $form   = $this->createCreateForm($entity);

        return $this->render('OSETimeClockBundle:EntryType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EntryType entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSETimeClockBundle:EntryType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntryType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OSETimeClockBundle:EntryType:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing EntryType entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSETimeClockBundle:EntryType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntryType entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OSETimeClockBundle:EntryType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a EntryType entity.
    *
    * @param EntryType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EntryType $entity)
    {
        $form = $this->createForm(new EntryTypeType(), $entity, array(
            'action' => $this->generateUrl('entrytype_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EntryType entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSETimeClockBundle:EntryType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntryType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('entrytype_edit', array('id' => $id)));
        }

        return $this->render('OSETimeClockBundle:EntryType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a EntryType entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OSETimeClockBundle:EntryType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EntryType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('entrytype'));
    }

    /**
     * Creates a form to delete a EntryType entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entrytype_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
