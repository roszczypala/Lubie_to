<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Crew;
use AppBundle\Form\CrewType;
use AppBundle\Entity\Photo;
use AppBundle\Form\PhotoType;

/**
 * Crew controller.
 *
 * @Route("/crew")
 */
class CrewController extends Controller
{

    /**
     * Lists all Crew entities.
     *
     * @Route("/", name="crew")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Crew')->findAllActive();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Crew entity.
     *
     * @Route("/", name="crew_create")
     * @Method("POST")
     * @Template("AppBundle:Crew:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Crew();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('crew'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Crew entity.
     *
     * @param Crew $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Crew $entity)
    {
        $form = $this->createForm(new CrewType(), $entity, array(
            'action' => $this->generateUrl('crew_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Crew entity.
     *
     * @Route("/new", name="crew_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Crew();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Crew entity.
     *
     * @Route("/{id}", name="crew_show")
     * @Method("GET")
     * @Template("AppBundle:Main:crew.html.twig")
     */
    public function showAction($id)
    {
        $crew = $this->getDoctrine()->getRepository('AppBundle:Crew')->find($id);

        if (!$crew) {
            throw $this->createNotFoundException('Unable to find Crew entity.');
        }

        $events = $crew->getEvents();
        $users = $crew->getUsers();
        $deleteForm = $this->createDeleteForm($id);
        
        return ['events' => $events,
            'users' => $users,
            'crew' => $crew,
            'delete_form' => $deleteForm->createView()
        ];
    }

    /**
     * Displays a form to edit an existing Crew entity.
     *
     * @Route("/{id}/edit", name="crew_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Crew')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Crew entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Crew entity.
    *
    * @param Crew $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Crew $entity)
    {
        $form = $this->createForm(new CrewType(), $entity, array(
            'action' => $this->generateUrl('crew_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Crew entity.
     *
     * @Route("/{id}", name="crew_update")
     * @Method("PUT")
     * @Template("AppBundle:Crew:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Crew')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Crew entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('crew_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Crew entity.
     *
     * @Route("/{id}", name="crew_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Crew')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Crew entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('crew'));
    }

    /**
     * Creates a form to delete a Crew entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('crew_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
