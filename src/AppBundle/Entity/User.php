<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @var Address
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="users")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $address;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Crew", inversedBy="users")
     * @ORM\JoinTable(name="id_crews")
     */
    private $crews;
    
    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Event", inversedBy="users")
     * @ORM\JoinTable(name="id_events")
     */
    private $events;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="user")
     */
    private $comments;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Message", mappedBy="sender")
     */
    private $messagesSent = [];
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Message", mappedBy="receiver")
     */
    private $messagesReceived = [];
    
    /**
     * @var Event
     * 
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Event", mappedBy="eventAdmin")
     */
    private $event;


    public function __construct()
    {
        parent::__construct();
    // your own logic
    }

    /**
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     * @return User
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add crews
     *
     * @param \AppBundle\Entity\Crew $crew
     * @return User
     */
    public function addCrew(\AppBundle\Entity\Crew $crew)
    {
        $this->crews[] = $crew;

        return $this;
    }

    /**
     * Remove crew
     *
     * @param \AppBundle\Entity\Crew $crew
     */
    public function removeCrew(\AppBundle\Entity\Crew $crew)
    {
        $this->crews->removeElement($crew);
    }

    /**
     * Get crews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCrews()
    {
        return $this->crews;
    }


    /**
     * Add Comment
     *
     * @param \AppBundle\Entity\Comment $comment
     * @return User
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set event
     *
     * @param \AppBundle\Entity\Event $event
     * @return User
     */
    public function setEvent(\AppBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \AppBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Add events
     *
     * @param \AppBundle\Entity\Event $event
     * @return User
     */
    public function addEvent(\AppBundle\Entity\Event $event)
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \AppBundle\Entity\Event $event
     */
    public function removeEvent(\AppBundle\Entity\Event $event)
    {
        $this->events->removeElement($event);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add messageSent
     *
     * @param \AppBundle\Entity\Message $messageSent
     * @return User
     */
    public function addMessageSent(\AppBundle\Entity\Message $messageSent)
    {
        $this->messagesSent[] = $messageSent;

        return $this;
    }

    /**
     * Remove messageSent
     *
     * @param \AppBundle\Entity\Message $messageSent
     */
    public function removeMessageSent(\AppBundle\Entity\Message $messageSent)
    {
        $this->messagesSent->removeElement($messageSent);
    }

    /**
     * Get messagesSent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessagesSent()
    {
        return $this->messagesSent;
    }

    /**
     * Add messageReceived
     *
     * @param \AppBundle\Entity\Message $messageReceived
     * @return User
     */
    public function addMessageReceived(\AppBundle\Entity\Message $messageReceived)
    {
        $this->messagesReceived[] = $messageReceived;

        return $this;
    }

    /**
     * Remove messageReceived
     *
     * @param \AppBundle\Entity\Message $messageReceived
     */
    public function removeMessageReceived(\AppBundle\Entity\Message $messageReceived)
    {
        $this->messagesReceived->removeElement($messageReceived);
    }

    /**
     * Get messagesReceived
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessagesReceived()
    {
        return $this->messagesReceived;
    }
}
