<?php

namespace Mesd\ApyDataGridTestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mesd\ApyDataGridTestBundle\Entity\Everything;
use Mesd\ApyDataGridTestBundle\Form\EverythingType;

/**
 * Everything controller.
 *
 */
class EverythingController extends Controller
{

    /**
     * Lists all Everything entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MesdApyDataGridTestBundle:Everything')->findAll();

        return $this->render('MesdApyDataGridTestBundle:Everything:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Everything entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Everything();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('everything_show', array('id' => $entity->getId())));
        }

        return $this->render('MesdApyDataGridTestBundle:Everything:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Everything entity.
    *
    * @param Everything $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Everything $entity)
    {
        $form = $this->createForm(new EverythingType(), $entity, array(
            'action' => $this->generateUrl('everything_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Everything entity.
     *
     */
    public function newAction()
    {
        $entity = new Everything();
        $form   = $this->createCreateForm($entity);

        return $this->render('MesdApyDataGridTestBundle:Everything:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Everything entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdApyDataGridTestBundle:Everything')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Everything entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MesdApyDataGridTestBundle:Everything:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Everything entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdApyDataGridTestBundle:Everything')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Everything entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MesdApyDataGridTestBundle:Everything:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Everything entity.
    *
    * @param Everything $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Everything $entity)
    {
        $form = $this->createForm(new EverythingType(), $entity, array(
            'action' => $this->generateUrl('everything_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Everything entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdApyDataGridTestBundle:Everything')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Everything entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('everything_edit', array('id' => $id)));
        }

        return $this->render('MesdApyDataGridTestBundle:Everything:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Everything entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MesdApyDataGridTestBundle:Everything')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Everything entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('everything'));
    }

    /**
     * Creates a form to delete a Everything entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('everything_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
