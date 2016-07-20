<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
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
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Crew", inversedBy="users")
     * @ORM\JoinTable(name="id_crews")
     */
    private $crews;
    
    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Event", mappedBy="users")
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
     * @var string
     * @Assert\NotBlank(message="Musisz podać miasto")
     * @ORM\Column(name="city", type="string", length=255, nullable = true)
     */
    private $city;

    /**
     * @var string
     * @Assert\NotBlank(message="Musisz podać nazwę ulicy")
     * @ORM\Column(name="street", type="string", length=255, nullable = true)
     */
    private $street;

    /**
     * @var string
     * @Assert\NotBlank(message="Musisz podać numer ulicy")
     * @ORM\Column(name="street_number", type="string", length=255, nullable = true)
     */
    private $streetNumber;

    /**
     * @var string
     * 
     * @ORM\Column(name="flat_number", type="string", length=255, nullable = true)
     */
    private $flatNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255, nullable = true)
     */
    private $postcode;
    
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Event", mappedBy="eventAdmin")
     */
    private $eventsAdmined;
    
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Photo", mappedBy="user")
     */
    private $photo;
    
     /**
     * @var float
     * @ORM\Column(name="longitude", type="float", nullable = true)
     */
    private $longitude;
    
    /**
     * @var float
     * @ORM\Column(name="latitude", type="float", nullable = true)
     */
    private $latitude;


    public function __construct()
    {
        parent::__construct();
        $this->crews = [];
        $this->comments = [];
        $this->events = [];
        $this->messagesReceived = [];
        $this->messagesSent = [];
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
    
    public function getActiveCrews() {
        
        $allCrews = $this->crews;
        $activeCrews = [];
        foreach ($allCrews as $crew) {
            if($crew->getAccepted() == 1) {
                $activeCrews[] = $crew;
            }
        }
        
        return $activeCrews;
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
    
    public function getActiveEvents() {
        
        $allEvents = $this->events;
        $activeEvents = [];
        foreach ($allEvents as $event) {
            if($event->getAccepted() == 1) {
                $activeEvents[] = $event;
            }
        }
        
        return $activeEvents;
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

    /**
     * Add messagesSent
     *
     * @param \AppBundle\Entity\Message $messagesSent
     * @return User
     */
    public function addMessagesSent(\AppBundle\Entity\Message $messagesSent)
    {
        $this->messagesSent[] = $messagesSent;

        return $this;
    }

    /**
     * Remove messagesSent
     *
     * @param \AppBundle\Entity\Message $messagesSent
     */
    public function removeMessagesSent(\AppBundle\Entity\Message $messagesSent)
    {
        $this->messagesSent->removeElement($messagesSent);
    }

    /**
     * Add messagesReceived
     *
     * @param \AppBundle\Entity\Message $messagesReceived
     * @return User
     */
    public function addMessagesReceived(\AppBundle\Entity\Message $messagesReceived)
    {
        $this->messagesReceived[] = $messagesReceived;

        return $this;
    }

    /**
     * Remove messagesReceived
     *
     * @param \AppBundle\Entity\Message $messagesReceived
     */
    public function removeMessagesReceived(\AppBundle\Entity\Message $messagesReceived)
    {
        $this->messagesReceived->removeElement($messagesReceived);
    }

    /**
     * Set photo
     *
     * @param \AppBundle\Entity\Photo $photo
     * @return User
     */
    public function setPhoto(\AppBundle\Entity\Photo $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \AppBundle\Entity\Photo 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return User
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set streetNumber
     *
     * @param string $streetNumber
     * @return User
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get streetNumber
     *
     * @return string 
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set flatNumber
     *
     * @param string $flatNumber
     * @return User
     */
    public function setFlatNumber($flatNumber)
    {
        $this->flatNumber = $flatNumber;

        return $this;
    }

    /**
     * Get flatNumber
     *
     * @return string 
     */
    public function getFlatNumber()
    {
        return $this->flatNumber;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return User
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Add eventsAdmined
     *
     * @param \AppBundle\Entity\Event $eventAdmined
     * @return User
     */
    public function addEventAdmined(\AppBundle\Entity\Event $eventAdmined)
    {
        $this->eventsAdmined[] = $eventAdmined;

        return $this;
    }

    /**
     * Remove eventsAdmined
     *
     * @param \AppBundle\Entity\Event $eventAdmined
     */
    public function removeEventAdmined(\AppBundle\Entity\Event $eventAdmined)
    {
        $this->eventsAdmined->removeElement($eventAdmined);
    }

    /**
     * Get eventsAdmined
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEventsAdmined()
    {
        return $this->eventsAdmined;
    }

    /**
     * Add eventsAdmined
     *
     * @param \AppBundle\Entity\Event $eventsAdmined
     * @return User
     */
    public function addEventsAdmined(\AppBundle\Entity\Event $eventsAdmined)
    {
        $this->eventsAdmined[] = $eventsAdmined;

        return $this;
    }

    /**
     * Remove eventsAdmined
     *
     * @param \AppBundle\Entity\Event $eventsAdmined
     */
    public function removeEventsAdmined(\AppBundle\Entity\Event $eventsAdmined)
    {
        $this->eventsAdmined->removeElement($eventsAdmined);
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return User
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return User
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
}
