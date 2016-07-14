<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Event;
use AppBundle\Entity\Crew;
use AppBundle\Form\EventType;
use AppBundle\Entity\Comment;

/**
 * Event controller.
 *
 * @Route("/event")
 */
class EventController extends Controller
{

    /**
     * Lists all Event entities.
     *
     * @Route("/", name="event")
     * @Method("GET")
     * @Template("AppBundle:Main:event.html.twig")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Event')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Event entity.
     *
     * @Route("/create/{crewId}", name="event_create")
     * @Template("AppBundle:Event:new.html.twig")
     */
    public function createAction(Request $request, $crewId)
    {
        $userManager = $this->container->get('fos_user.user_manager');
        $loggedUser = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());
        
        $entity = new Event();
        $crew = $this->getDoctrine()->getRepository("AppBundle:Crew")->find($crewId);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $data = $form->getData();

        $street = $data->getStreet();
        $city = $data->getCity();
        $streetNumber = $data->getStreetNumber();

        $arrayGeo = $this->getLocalization($city, $streetNumber, $street);

        $latitude = $arrayGeo[0];
        $longitude = $arrayGeo[1];

        $entity -> setLatitude($latitude);
        $entity -> setLongitude($longitude);

        if ($form->isValid()) {
            $entity->setAccepted(0);
            $entity->setCrew($crew);
            $entity->addUser($loggedUser);
//            $entity->getEventAdmin($loggedUser);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl("crew_show", ['id' => $crewId]));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Event entity.
     *
     * @param Event $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Event $entity)
    {
        $form = $this->createForm(new EventType(), $entity, array(
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Event entity.
     *
     * @Route("/new/", name="event_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Event();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Event entity.
     *
     * @Route("/{id}", name="event_show")
     * @Template("AppBundle:Main:event.html.twig")
     */
    public function showAction(Request $request, $id)
    {
        $event = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);
        
        $users = $event->getUsers();
        
        $userManager = $this->container->get('fos_user.user_manager');
        $loggedUser = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());
        
        if (!$event) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }
        
        
        $comment = new Comment();
        $newCommentForm = $this->createFormBuilder($comment)->add('text')->add('submit', 'submit')->getForm();
        
        $newCommentForm->handleRequest($request);
        
        if($newCommentForm->isValid()) {
            $date = new \DateTime();
            $comment->setUser($loggedUser);
            $comment->setEvent($event);
            $comment->setDate($date);
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
          
        return ['users' => $users,
                'loggedUser' => $loggedUser,
                'event' => $event,
            'comment_form' => $newCommentForm->createView()]; 
        }
        
        return ['users' => $users,
                'event' => $event,
                'loggedUser' => $loggedUser,
            'comment_form' => $newCommentForm->createView()]; 
    }
    
    public function getLocalization($city, $streetNumber, $street){

        $cityArr = explode(' ', $city);
        $city = '+'.implode('_', $cityArr);
        $streetArr = explode(" ", $street);
        $street = "+".implode("_", $streetArr);
        $streetNumber = "+".$streetNumber;

        $jsonContent = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$streetNumber.$street.$city.".&key=AIzaSyBXhtL_yLZra6mzoFA7P3thVJyAw7w4vmg");
        $arrayJSON = json_decode($jsonContent, true);
            
        if($arrayJSON['status'] == 'OK') {
            $lat = $arrayJSON['results'][0]['geometry']['location']['lat'];
            $lng = $arrayJSON['results'][0]['geometry']['location']['lng'];
            $arrayGeo = [$lat, $lng];

            return $arrayGeo;
        }
        if($arrayJSON['status'] == 'ZERO_RESULTS'){
            $arrayGeo = [0,0];
            return $arrayGeo;
        }
    }

    /**
     * Displays a form to edit an existing Event entity.
     *
     * @Route("/{id}/edit", name="event_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
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
    * Creates a form to edit a Event entity.
    *
    * @param Event $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Event $entity)
    {
        $form = $this->createForm(new EventType(), $entity, array(
            'action' => $this->generateUrl('event_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));


        return $form;
    }
    /**
     * Edits an existing Event entity.
     *
     * @Route("/{id}/edit", name="event_update")
     * @Method("PUT")
     * @Template("AppBundle:Event:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $data = $editForm->getData();

        $street = $data->getStreet();
        $city = $data->getCity();
        $streetNumber = $data->getStreetNumber();

        $arrayGeo = $this->getLocalization($city, $streetNumber, $street);
        
        $latitude = $arrayGeo[0];
        $longitude = $arrayGeo[1];

        $entity -> setLatitude($latitude);
        $entity -> setLongitude($longitude);
        
        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('event_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Event entity.
     *
     * @Route("/{id}", name="event_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Event')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Event entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('event'));
    }

    /**
     * Creates a form to delete a Event entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('event_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
     /**
     * @Route("/addUserEvent/{id}")
     */
    public function addUserToEventAction($id)
    {
        $user = $this
            ->getUser();
        $userId = $user->getUsername();
        $event = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->find($id);
        if(!$event){
            throw $this->createNotFoundException('Event not found');
        }
        $usersInEvent = $event->getUsers();
        foreach ( $usersInEvent as $users){
            if ($users  == $userId){
                $this->addFlash(
                    'notice',
                    'ERROR, You are already in this event'
                );
                return $this->redirectToRoute('event_show',['id' => $id]);
            }
        }
        $event->addUser($user);
        $user->addEvent($event);
        $em = $this
            ->getDoctrine()
            ->getManager();
        $em->persist($user);
        $em->persist($event);
        $em->flush();
        $this->addFlash(
            'notice1',
            'Congratulations, you\'ve just joined to this event. Have fun!'
        );
        return $this->redirectToRoute('event_show',['id' => $id]);
    }
    
    /**
     * @Route("/removeUser/{id}")
     */
    public function removeUserFromEvent($id)
    {
        $user = $this
            ->getUser();
        
        $event = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->find($id);
        
        if(!$event){
            throw $this->createNotFoundException('Event not found');
        }
        
        $event->removeUser($user);
        $user->removeEvent($event);
        $em = $this
            ->getDoctrine()
            ->getManager();
        $em->persist($user);
        $em->persist($event);
        $em->flush();
        return $this->redirectToRoute('event_show',['id' => $id]);
    }
}
