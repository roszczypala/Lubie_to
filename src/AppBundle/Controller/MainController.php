<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use AppBundle\Entity\Crew;

class MainController extends Controller {

    /**
     * @Route("/")
     * @Template()
     */
    public function mainAction() {
        $groups = $this->getDoctrine()->getRepository('AppBundle:Crew')->findAll();
        $n = count($groups);
        return ['groups' => $groups,
                'n' => $n
                ];
    }

    /**
     * @Route("/index")
     * @template()
     */
    public function indexAction() {
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());

        $crews = $user->getCrews();
        $events = $user->getEvents();

        return ['crews' => $crews,
            'events' => $events,
            'user' => $user
        ];
    }
    
    /**
     * @Route("/user/{id}")
     * @Template
     */
    public function userAction($id) {
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id'=>$id));

        $crews = $user->getCrews();
        $events = $user->getEvents();
        

        return ['events' => $events,
            'user' => $user,
            'crews' => $crews
        ];
    }

}
