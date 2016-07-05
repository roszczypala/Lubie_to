<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\User;
use AppBundle\Entity\Crew;
use AppBundle\Entity\Event;

/**
 * Class UserController
 * @Route("/admin")
 */
class UserController extends Controller
{

    /**
     * @Route("/index")
     * @Template("AppBundle:User:index.html.twig")
     */
    public function showIndexAction()
    {
        $events = $this
            ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findEventsNotAccepted();

        $crews = $this
            ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findCrewsNotAccepted();
        
        return ['events' => $events, 'crews' => $crews];
        
    }
    /**
     * @Route("/users")
     * @Template("AppBundle:User:showAllUsers.html.twig")
     */
    public function showAllUsersAction()
    {
        $users = $this
            ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findAllUsersSorted();

        return ['users' => $users];
    }

    /**
     * @Route("/remove/{id}")
     *
     */
    public function removeUserAction($id)
    {
        $user = $this
            ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find($id);

        if(!$user){
            throw $this
                ->createNotFoundException('Cannot found user');
        }

        $em = $this
            ->getDoctrine()
            ->getManager();
        $em->remove($user);
        $em->flush();

        return $this->render('AppBundle:User:deleteUser.html.twig');
    }
    
    /**
     * @Route("/crews")
     * @Template("AppBundle:User:showAllCrews.html.twig")
     */
    public function showAllCrewsAction()
    {
        $crews = $this
            ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findAllActiveCrews();

        return ['crews' => $crews];
    }

    /**
     * @Route("/crew/remove/{id}")
     *
     */
    public function removeCrewAction($id)
    {
        $crew = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Crew')
            ->find($id);

        if(!$crew){
            throw $this
                ->createNotFoundException('Cannot found crew');
        }

        $em = $this
            ->getDoctrine()
            ->getManager();
        $em->remove($crew);
        $em->flush();

        return $this->render('AppBundle:User:deleteCrew.html.twig');
    }

    /**
     * @Route("/events")
     * @Template("AppBundle:User:showAllEvents.html.twig")
     */
    public function showAllEventsAction()
    {
        $events = $this
            ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findAllActiveEvents();

        return ['events' => $events];
    }

    /**
     * @Route("/event/remove/{id}")
     *
     */
    public function removeEventAction($id)
    {
        $event = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->find($id);

        if(!$event){
            throw $this
                ->createNotFoundException('Cannot found event');
        }

        $em = $this
            ->getDoctrine()
            ->getManager();
        $em->remove($event);
        $em->flush();

        return $this->render('AppBundle:User:deleteEvent.html.twig');
    }
    /**
     * @Route("/crew/getAccepted/{id}")
     */
    public function setAcceptToCrewAction($id)
    {
        $crew = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Crew')
            ->find($id);
        if(!$crew){
            throw $this
                ->createNotFoundException('Cannot found crew.');
        }
        elseif($crew->getAccepted() == 1){
            throw $this
                ->createNotFoundException('This crew has activated before.');
        }
        else{
            $crew->setAccepted(1);
            $em = $this
                ->getDoctrine()
                ->getManager();
            $em->persist($crew);
            $em->flush();

            return $this->render('AppBundle:User:accepted.html.twig');
        }

    }

    /**
     * @Route("/event/getAccepted/{id}")
     */
    public function setAcceptToEventAction($id)
    {
        $event = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->find($id);
        if (!$event) {
            throw $this
                ->createNotFoundException('Cannot found Event.');
        } elseif ($event->getAccepted() == 1) {
            throw $this
                ->createNotFoundException('This Event has activated before.');
        } else {
            $event->setAccepted(1);
            $em = $this
                ->getDoctrine()
                ->getManager();
            $em->persist($event);
            $em->flush();

            return $this->render('AppBundle:User:accepted.html.twig');
        }
    }

}
