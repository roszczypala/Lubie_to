<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Message;
use AppBundle\Form\MessageType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Message controller.
 *
 * @Route("/message")
 */
class MessageController extends Controller
{
    
   /**
     *
     * @Route("/new/{id}")
     * @Template()
     */
    public function newAction($id, Request $request)
    {
        $author = $this
            ->getUser();

        $message = new Message();
        $time = new \DateTime();

        $receiver = $this
            ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find($id);

        $form= $this
            ->createFormBuilder($message)
            ->add('title', 'text')
            ->add('text','textarea')
            ->add('submit', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {
            $message->setDate($time)
                    ->setStatus(0) 
                    ->setReceiver($receiver)
                    ->setSender($author);
            $author->addMessageSent($message);
            $receiver->addMessageReceived($message);

            $em = $this
                ->getDoctrine()
                ->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash(
                'notice1',
                'Your message has been sent!'
            );

            return $this->redirectToRoute('message');
        }
        return $this->render('AppBundle:Message:new.html.twig', ['form' => $form->createView()]);

    }
    
    /**
     * Finds and displays a Message entity.
     *
     * 
     * @Route("/{id}", name="message_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $message = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Message')
            ->find($id);
        if(!$message){
            throw $this->createNotFoundException('Message not found');
        }
        
        return [
            'message' => $message];
    }
    
    /**
     * 
     * @Route("/", name="message")
     * @Template("AppBundle:Message:messages.html.twig")
     */
    public function allMessagesAction()
    {
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());
        
        $allMessagesSent = $user->getMessagesSent();
        if(!$allMessagesSent) {
            throw $this->createNotFoundException('No messages sent');
        }

        $allMessagesReceived = $user->getMessagesReceived();
        if(!$allMessagesReceived) {
            throw $this->createNotFoundException('No messages received');
        }

        return ['sentMessages' => $allMessagesSent, 'receivedMessages' => $allMessagesReceived, 'user' => $user ];
    }
    
    
    /**
     * 
     * @Route("/delete/{id}")
     * @Template
     */
    public function deleteAction($id)
    {
        $message = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Message')
            ->find($id);
        if(!$message){
            throw $this->createNotFoundException('Message not found');
        }
        $em = $this
            ->getDoctrine()
            ->getManager();
        $em->remove($message);
        $em->flush();
        $this->addFlash(
            'notice',
            'Message removed succesfully!'
        );

        return $this->redirectToRoute('message');
    }
    
}
